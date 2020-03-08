<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(){

        return view('profile.view', [
            'user' => auth()->user(),
            'auth' => true,
        ]);
    }

    public function update(Request $request){

        if ($request->avatar){
            $avatar = md5_file($request->avatar).'.'.$request->avatar->extension();
            if(!file_exists(storage_path("public/images/users/$avatar"))){
                $request->avatar->storeAs('/public/images/users/',$avatar);
            }
            auth()->user()->update([
                'avatar' => $avatar
            ]);
            return response()->json(['msg' => 'Successfuly update image']);
        }

        auth()->user()->update(
           $request->input()
        );

        return response()->json(['msg' => 'Successfuly update info']);
    }

    public function show(Request $request, $id){;
        return view('profile.view', [
            'user' => User::find($id),
            'auth' => auth()->user()->id == $id,
        ]);
    }
}
