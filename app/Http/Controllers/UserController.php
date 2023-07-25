<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Nonpaiduser;


class UserController extends Controller
{
    function testData()
    {
         $data=User::all();
        return view('user',['users'=>$data]);
    }

    function deleteUser($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect("testData");
    }
    
    function show1Update($id)
    {
        $data=User::find($id);
        return view("updateUser",['data'=>$data]);
    }
   

    public function updateUser(Request $request)
{
    
    
    // $validatedData = $request->validate([
    //     'name' => 'required',
    //     'email' => 'required|email',
    //     'password' => 'required|min:8',
    //  ]);

     $data = User::find($request->id);
     $data->name = $request['name'];
     $data->email = $request['email'];
     $data->password = $request['password'];
     $data->save();

    return redirect("testData");
}

   
}

