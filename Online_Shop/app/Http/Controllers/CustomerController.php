<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    //
    public function Create(){
        return view('pages.customer.create');
    }
    public function createSubmit(Request $request){
        $this->validate(
            $request,
            [   
                'id'=>'required',
                'name'=>'required|max:20|',
                'phone'=>'required',
            ],
            [
                'id.required'=>'Please put your id',
                'name.required'=>'Please put your name',
                'phone.required'=>'Please put your phone number',
                
            ]
        );

        $var = new customer();
        $var->id = $request->id;
        $var->name= $request->name;
        $var->phone = $request->phone;
        $var->save();
        return redirect()->route('customer.login');     
    }
    // public function edit(Request $request){
    //     //
    //     $id = $request->id;
    //     $customer = customer::where('id',$id)->first();
    //     return view('pages.customer.login')->with('customer',$customer);
    // }
    // public function editSubmit(Request $request){
    //     $var = customer::where('id',$request->id)->first();
    //     $var->id = $request->id;
    //     $var->name= $request->name;
    //     $var->price = $request->phone;
    //     $var->save();
    //     return redirect()->route('pages.customer.login');

    // }
    // function deletesubmit(Request $request){
    //     $customer = customer::where('id' , $request->id)->first();
    //     $customer->delete();
    //     return redirect()->route('pages.customer.login');
    //     }
    public function login(Request $request){
        return view('pages.customer.login');
    }
    public function loginsubmit(Request $request){
        $login = $request->input();
        $request = session()->put('name',$login['name']);
        return redirect()->route('customer.dashboard');   
    }
}