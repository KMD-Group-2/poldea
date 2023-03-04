<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Jobs\SendAccountCredential;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['roles','staff','staff.department','staff.position'])->paginate(10);

        $staffs = Staff::with(['department','position'])->get();

        $roles = Role::select('id','name')->get();

        // For Select2 Plugin
        view()->share(['select2' => true]);

        return view('pages.users.index',compact('users','staffs','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated());

        $credentials = [
            'username' => $request->validated()['username'],
            'password' => $request->validated()['str'],
        ];

        SendAccountCredential::dispatch($user->staff->email,$credentials);

        $role = Role::findById($request->validated()['role_id']);

        $user->syncPermissions($role->permissions);
        $user->assignRole([$role->id]);

        return response()->json(['success' => 'Succesfully Added']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        $role = Role::findById($request->validated()['role_id']);
        DB::table('model_has_roles')->where('model_id', $user->id)->delete();
        DB::table('model_has_permissions')->where('model_id', $user->id)->delete();

        $user->syncPermissions($role->permissions);
        $user->assignRole([$role->id]);

        return response()->json(['success' => 'Succesfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['success' => 'Succesfully Deleted']);
    }

    public function massDestroy(Request $request)
    {
        User::whereIn('id',$request->ids)->delete();

        return response()->json(['success' => 'Succesfully Deleted']);
    }
}
