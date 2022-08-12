<?php

namespace App\Http\Controllers\students;

use App\Subjects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class appController extends Controller
{
    //view applied papers
    public function index(){
        return view('applied.applied_papers');
    }


    //search user needs
    public function manage(Request $request) {
        $this->validate($request, [
            'std_year_sem'=>'required',
            'paper_year'=>'required',
            'dept'=>'required',
        ]);

        $std_year_sem=$request->get('std_year_sem');
        $paper_year=$request->get('paper_year');
        $dept=$request->get('dept');
        $result=null;

        if(($request->dept != "") && ($request->std_year_sem != "") && ($request->paper_year != "")) {
            $result=DB::table('papers')->where('dept','like','%'.$dept.'%')->where('std_year_sem','like','%'.$std_year_sem.'%')->where('paper_year','like','%'.$paper_year.'%')->get();
            $count=count($result);
            if($count > 0) {
                $course_table=DB::table('subjects')->get();
                return view('applied.paper_table')->with('result', $result)->with('course_table',$course_table);
            }else{
                return redirect()->back()->with('error',"Papers You searched are not available!");
            }
        }else{
            return redirect()->back()->with('error',"Fill all fields!");
        }
    }



}
