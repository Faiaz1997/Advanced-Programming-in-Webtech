<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\userinfos;
use App\Models\donations;

class ProjectController extends Controller
{
    //
    public function projectlist(){
        $projectslist = projects::all();
        //return view('pages.admin.projectlist')->with('projectlist',$projectslist);
        return $projectslist;
    }
    public function donationdetails(Request $request){
        $id = $request->id;
        $donation = donations::where('tran_id',$id)->first();
        //return view('pages.admin.donationdetails')->with('donation',$donation); 
        return $donation;
       
    }
    public function donorlist(Request $request){
        $id = $request->id;
        $donors = donations::where('p_id',$id)->with('donordetails')->get();
        return $donors;
        //return view('pages.admin.donorlist')->with('donors',$donors);
    }
    public function alldonations(Request $request){
        $alldonations = donations::where('d_id',$request->id)->get(); 
        //return view('pages.admin.donations')->with('alldonations',$alldonations);
        return $alldonations;
    }

    public function changestatus(Request $request){
        //
        $status = projects::where('p_id',$request->id)->first();
        return $status;
        //return view('pages.admin.projectstatus')->with('status',$status);
    }
    public function status(Request $request){
        projects::where('p_id',$request->id)
                                ->update(['p_status'=> ($request->status)]);
        return redirect()->route('project.list');
    }
    public function fund(Request $request){
        $fund = donations::where('p_id',$request->id)->get(); 
      
        $total = 0;
        foreach($fund as $fund){
            $total +=$fund->amount;
        }
        //return view('pages.admin.fund')->with('fund',$fund);
        return $fund->with($total);
    }
 
}
