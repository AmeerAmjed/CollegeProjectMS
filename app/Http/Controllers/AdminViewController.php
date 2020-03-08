<?php

namespace App\Http\Controllers;

use App\User;
use App\College;
use App\Project;
use App\Role;
use App\Tranining;
use Illuminate\Http\Request;

class AdminViewController extends Controller
{

    public function index(){

        return view('admin.dashborad', [
            'users' => User::all()->take(6),
            'colleges' => College::all(),
            'projects' => Project::all()->take(6),
            'tranining'  => Tranining::all()->take(4)
        ]);
    }

    public function users(Request $request,User $users){

        if ($query = $request->query('s')){
            $users = User::where('fullname','LIKE', "%".$query."%");
        }
        return view('admin.users',[
            'roles' => Role::all(),
            'users' => $users->paginate(12)
        ]);
    }

    public function projects(Request $request, $active){
        $project = Project::where('active',  !!$active);

        if ($query = $request->query('s')){

            $project = $project->where('name','LIKE', "%".$query."%");
        }

        return view('admin.projects',[
            'projects' => $project->paginate(15)
        ]);   
    }

    public function tranining(Request $request){
        $tran = Tranining::paginate(15);

        return view('admin.tranining',[
            'trans' => $tran
        ]);  
    }
    
}
