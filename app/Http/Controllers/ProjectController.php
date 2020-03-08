<?php

namespace App\Http\Controllers;

use App\College;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    public function index(Project $project, College $college, $collegeid){
        
        return view("projects", ['college' => $college::find($collegeid) ]);
    }

    public function create(){

        return view("addproject");
    }

    public function store(Request $request){

        // dd( $request->file('image') );
        $validator = Validator::make($request->all(), [
            'name'  => 'required|unique:projects',
            'link'  => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect('/project/create')->withErrors($validator);
        }

        // $request->image.

        // if ($request->image){
        $image = md5_file($request->image).'.'.$request->image->extension();
        if(!file_exists(storage_path("public/images/projects/$image"))){
            $request->image->storeAs('/public/images/projects/',$image);
        }
        // }

        // 'name', 'description', 'link', 'language', 'active', 'user_id', 'college_id'        
        $project = Project::create([
            'name' => $request->name,
            'link' => $request->link,
            'image' => $image,
            'description' => $request->description,
            'stage_id'    => auth()->user()->stage->id,
            'college_id'  => auth()->user()->college->id,
        ]);

        $project->users()->attach(auth()->user()->id);

        // $project

        return redirect('/');
    }

    public function edit(Request $request, $id){
        $project = Project::find($id);
        if (!$project){
            return redirect()->back();
        }

        return view('editproject',[ 'project' => Project::find($id)]);

    }

    public function update(Request $request, $id){
        $project = Project::find($id);
        if (!$project){ return redirect()->back(); }

        if($request->image){
            $image = md5_file($request->image).'.'.$request->image->extension();
            if(!file_exists(storage_path("public/images/projects/$image"))){
                $request->image->storeAs('/public/images/projects/',$image);
            }

            $project->image = $image;
            $project->save();
        }   

        $project->update($request->input());

        return redirect()->back();
    }
}
