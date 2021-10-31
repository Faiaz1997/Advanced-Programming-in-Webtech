<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userinfos;
use App\Models\projects;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('pages.admin.dashboard');
    }
    public function updateadmin(Request $request){
        //
        $info = userinfos::where('id',session()->get('user'))->first();
        return view('pages.admin.updateadmin')->with('info',$info);
    }
    public function updateadminsubmit(Request $request){
        $var = userinfos::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->phone = $request->phone;
        $var->type=$request->type;
        $var->password = md5($request->password);
        $var->email = $request->email;
        $var->save();
        return redirect()->route('logout');

    }
    public function adduser(){
        return view('pages.admin.adduser');
    }
    public function register(Request $request){
        $this->validate(
            $request,
            [   
                'name'=>'required|max:20|',
                'phone'=>'required',
                'email'=>'required',
                'password'=>'required'
            ],
            [
                
                'name.required'=>'Please put your name',
                'phone.required'=>'Please put your phone number',
                'email.required'=>'Please put your email address',
                'password.required'=>'Please put your password'
                
            ]
        );

        $var = new userinfos();
        $var->name= $request->name;
        $var->phone = $request->phone;
        $var->type = $request->type;
        $var->password = $request->password;
        $var->email = $request->email;
        $var->password = md5($request->password);
        $var->save();
        return redirect()->route('admin.dashboard');     
    }
    public function userlist(){
        $userlist = userinfos::all()->except(session()->get('user'));
        return view('pages.admin.userlist')->with('userlist',$userlist);
    }
    public function userdetail(Request $request){
        //
        $info = userinfos::where('id',$request->id)->first();
        return view('pages.admin.userdetail')->with('info',$info);
    }
    public function edituser(Request $request){
        //
        $info = userinfos::where('id',$request->id)->first();
        return view('pages.admin.edituser')->with('info',$info);
    }
    public function updateuser(Request $request){
        $var = userinfos::where('id', $request->id)->first();
        $var->name= $request->name;
        $var->phone = $request->phone;
        $var->type=$request->type;
        $var->password = $request->password;
        $var->email = $request->email;
        $var->save();
        return redirect()->route('user.list');
    }
    function userdelete(Request $request){
        $userlist = userinfos::where('id',$request->id)->first();
        $userlist->delete();
        return redirect()->route('user.list');
        }
    
}
