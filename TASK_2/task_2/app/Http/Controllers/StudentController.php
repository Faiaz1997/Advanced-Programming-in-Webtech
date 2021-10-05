<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function registration(){
        return view('registration');
    }
    public function registrationsubmit(Request $request){
        $this->validate(
            $request,
            [   
                'name'=>'required|min:5|max:10|regex:/^[A-Za-z]+$/',
                'email'=>'email',
                'password'=>'required',
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );

        $var = new student();
        $var->name= $request->name;
        $var->email = $request->email;
        $var->password=$request->password;
        $var->save();
        // $data =array();
        // $data['name']=$request->input('name');
        // $data['email']=$request->input('email');
        // $data['password']=$request->input('password');
        // $insert_user = DB::table('student')->insert($data);
        // if($insert_user){
        //     return redirect('registration');
        // }
        // else{
        //     
        // }
        return "OK"; 

            
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $student = student::where('id',$id)->first();
        return "OK";    

    }
    public function editSubmit(Request $request){
        $var = student::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->email = $request->email;
        $var->password=$request->password;
        $var->save();
        return "OK";

    }
    

}