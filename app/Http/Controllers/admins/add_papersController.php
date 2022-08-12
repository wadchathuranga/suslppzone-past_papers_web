<?php

namespace App\Http\Controllers\admins;

use App\Papers;
use App\Subjects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class add_papersController extends Controller
{
    //add papers page view
    public function index(){
        $add_all=Papers::orderBy('created_at','desc')->paginate(15);

        $pp_all=Papers::all()->count();
        $pp_pst=DB::table('papers')->where('dept','=','PST')->count();
        $pp_nr=DB::table('papers')->where('dept','=','NR')->count();
        $pp_food=DB::table('papers')->where('dept','=','FOOD')->count();
        $pp_sport=DB::table('papers')->where('dept','=','SPORT')->count();
        $pp_cis=DB::table('papers')->where('dept','=','CIS')->count();

        $data = [];
        $data['pp_all']=$pp_all;
        $data['pp_pst']=$pp_pst;
        $data['pp_nr']=$pp_nr;
        $data['pp_food']=$pp_food;
        $data['pp_sport']=$pp_sport;
        $data['pp_cis']=$pp_cis;

        return view('admins.add_papers')->with('add_all',$add_all)->withData($data);
    }

    //add papers
    public function add_papers(Request $request){
        $this->validate($request, [
            'course_code'=>'required',
            'paper_year'=>'required',
            'std_year_sem'=>'required',
            'dept'=>'required',
            'dwnld_link'=>'required'
        ]);

        $add=new Papers();
        $add->course_code=$request->input('course_code');
        $add->paper_year=$request->input('paper_year');
        $add->std_year_sem=$request->input('std_year_sem');
        $add->dept=$request->input('dept');
        $add->dwnld_link=$request->input('dwnld_link');
        $add->save();
        return redirect()->back()->with('message',"Paper Added Successful!");
    }

    //paper search
    public function search(Request $request){
        $paper=$request->get('search');
        $find=DB::table('papers')->where('course_code','like','%'.$paper.'%')->orWhere('dept','like','%'.$paper.'%')
            ->orWhere('paper_year','like','%'.$paper.'%')->orWhere('std_year_sem','like','%'.$paper.'%')->paginate(10);
        return view('admins.add_papers')->with('add_all',$find);
    }

    //delete papers
    public function delete_paper($id){
        $deletePaper = Papers::find($id);
        $deletePaper->delete();
        return $deletePaper;
    }




    //add subject page view
    public function subject(){
        $sub_all=Subjects::orderBy('created_at','desc')->paginate(10);
        return view('admins.add_subjects')->with('sub_all',$sub_all);
    }

    //add subjects
    public function add_subject(Request $request){
        $this->validate($request, [
            'course_code'=>'required|unique:subjects',
            'course_name'=>'required'
        ]);

        $sub=new Subjects();
        $sub->course_code = $request->input('course_code');
        $sub->course_name = $request->input('course_name');
        $sub->save();
        return redirect()->back()->with('message',"Subject added successful!");
    }

    //subject search
    public function search_sub(Request $request){
        $paper=$request->get('search');
        $find=DB::table('subjects')->where('course_code','like','%'.$paper.'%')->orWhere('course_name','like','%'.$paper.'%')->paginate(10);
        return view('admins.add_subjects')->with('sub_all',$find);
    }

    //delete subject
    public function delete_subject($id){
        $deleteSubject = Subjects::find($id);
        $deleteSubject->delete();
        return $deleteSubject;
    }
}
