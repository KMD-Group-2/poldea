<?php

namespace App\Http\Controllers;

use App\Http\Requests\Idea\StoreInfoRequest;
use App\Models\AcademicYear;
use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addInformationView(Idea $idea = null)
    {
        $categories = Category::select('id','name')->get();
        $academicYears = AcademicYear::select('id','academic_year')->whereDate('closure_date', '>=', now())->get();

        if(count($categories) == 0 || count($academicYears) == 0)
            return redirect()->back()->withErrors(['create-idea' => "Idea can't be post yet! Please contact system administrator!"]);

        // plugin ON
        view()->share([
            'steps' => true,
            'sweetalert' => true,
            'htmleditor' => true,
        ]);

        return view('pages.ideas.add-info',compact('categories','academicYears','idea'));
    }

    public function uploadFilesView(Idea $idea)
    {
        view()->share([
            'steps' => true,
            'sweetalert' => true,
            'htmleditor' => true,
        ]);

        return view('pages.ideas.upload-files',compact('idea'));
    }

    public function previewIdeaView(Idea $idea)
    {
        view()->share([
            'steps' => true,
            'sweetalert' => true,
            'htmleditor' => true,
        ]);
        return view('pages.ideas.preview-idea',compact('idea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInfo(StoreInfoRequest $request)
    {
        $idea = Idea::updateOrCreate([
            'id' => $request->idea_id ? $request->idea_id : 0,
        ],$request->validated());

        return response()->json(['id' => $idea->id],200);
    }

    public function uploadFiles()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.ideas.detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
