<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    //
    public function Create(){
        return view('pages.inventory.create');
    }
    public function createSubmit(Request $request){
        $this->validate(
            $request,
            [   
                'id'=>'required',
                'name'=>'required|max:20|',
                'price'=>'required',
                'quantity'=>'required',
                'description'=>'required'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters'
                
            ]
        );

        $var = new Inventory();
        $var->id = $request->id;
        $var->name= $request->name;
        $var->price = $request->price;
        $var->quantity=$request->quantity;
        $var->description = $request->description;
        $var->save();
        return redirect()->route('inventory.list');     
    }
    public function list(){
        $inventory = Inventory::all();
        return view('pages.inventory.list')->with('inventory',$inventory);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $inventory = Inventory::where('id',$id)->first();
        return view('pages.inventory.edit')->with('inventory',$inventory);
    }
    public function editSubmit(Request $request){
        $var = Inventory::where('id',$request->id)->first();
        $var->id = $request->id;
        $var->name= $request->name;
        $var->price = $request->price;
        $var->quantity=$request->quantity;
        $var->description = $request->description;
        $var->save();
        return redirect()->route('inventory.list');

    }
    function deletesubmit(Request $request){
        $inventory = Inventory::where('id' , $request->id)->first();
        $inventory->delete();
        return redirect()->route('inventory.list');
        }
}