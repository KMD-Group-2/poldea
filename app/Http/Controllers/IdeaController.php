<?php

namespace App\Http\Controllers;

use App\Http\Requests\Idea\StoreInfoRequest;
use App\Http\Requests\Idea\StoreUploadFileRequest;
use App\Models\AcademicYear;
use App\Models\Category;
use App\Models\Idea;
use App\Models\IdeaDocuments;
use App\Traits\FileHandler;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    use FileHandler;
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
        $categories = Category::select('id', 'name')->get();
        $academicYears = AcademicYear::select('id', 'academic_year')->whereDate('closure_date', '>=', now())->get();

        if (count($categories) == 0 || count($academicYears) == 0)
            return redirect()->back()->withErrors(['create-idea' => "Idea can't be post yet! Please contact system administrator!"]);

        // plugin ON
        view()->share([
            'steps' => true,
            'htmleditor' => true,
        ]);

        return view('pages.ideas.add-info', compact('categories', 'academicYears', 'idea'));
    }

    public function uploadFilesView(Idea $idea)
    {
        view()->share([
            'steps' => true,
            'progressbar' => true,
            'carousel' => true,
            'sweetalert' => true,
        ]);

        return view('pages.ideas.upload-files', compact('idea'));
    }

    public function previewIdeaView(Idea $idea)
    {
        view()->share([
            'steps' => true,
            'sweetalert' => true,
            'htmleditor' => true,
        ]);
        return view('pages.ideas.preview-idea', compact('idea'));
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
        ], $request->validated());

        return response()->json(['id' => $idea->id], 200);
    }

    public function uploadFiles(StoreUploadFileRequest $request)
    {
        $OriginalFileName = trim($request->validated()['file']->getClientOriginalName(), '.' . $request->validated()['file']->getClientOriginalExtension());
        $checkFileName = IdeaDocuments::where('file_name', 'LIKE', '%' . $OriginalFileName . '%')->get();

        if ($checkFileName->last()) {
            $ServerFileName = $checkFileName->last()->file_name;
            if ($OriginalFileName == $ServerFileName) {
                $fileName = $OriginalFileName . ' (1)';
            } else {
                preg_match('#\((.*?)\)#', substr($OriginalFileName, -4) , $brack);
                if(count($brack) > 0) {
                    preg_match('#\((.*?)\)#', substr($ServerFileName, -4) , $match);

                    (int)$match[1]++;
                    $fileName = $OriginalFileName . ' ('. $match[1] .')';
                }else{
                    $fileName = $OriginalFileName;
                }
            }
        }

        $filePath = $this->uploadFilePath($request->validated()['file'], Auth::user()->username . '/' . $request->validated()['file']->getClientOriginalExtension());

        $ideaFile = IdeaDocuments::create([
            'type' => $request->validated()['file']->getClientOriginalExtension(),
            'file_path' => $filePath,
            'file_name' => $fileName,
            'idea_id' => $request->validated()['idea_id'],
        ]);
        $ideaFile->carbon_created_at = Carbon::parse($ideaFile->created_at)->format('d M Y, g:i A');

        return response()->json(['file' => $ideaFile], 200);
    }

    public function deleteFile(Request $request)
    {
        if($request->id)
        {
            $file = IdeaDocuments::where('id', $request->id)->first();

            if($file)
            {
                $this->deleteFilePath($file->file_path);
                $file->delete();

                return response()->json(['file' => 'Successfully Deleted!']);
            }else{
                return response()->json(['file' => 'File Not Found!'],422);
            }
        }else{
            return response()->json(['file' => 'Invalid Request!'],422);
        }
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
