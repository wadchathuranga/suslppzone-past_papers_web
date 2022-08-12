<?php

namespace App\Http\Controllers\students;

use App\ContactMsg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contact_msgController extends Controller
{
    /*-------------------------------------------------- Admin functions Begin Here -----------------------------------------*/

    //msg details view
    public function admin_index(){
        $msg=ContactMsg::orderBy('created_at','desc')->paginate(10);
        $msg_count=ContactMsg::all()->count();
        return view('admins.contact_messages')->with('all_msg',$msg)->with('msg_count',$msg_count);
    }


    //message detail delete
    public function delete_msg($id){
        $deleteMsg = ContactMsg::find($id);
        $deleteMsg->delete();
        return $deleteMsg;
    }

    /*-------------------------------------------------- Admin functions End Here --------------------------------------------*/




    /*-------------------------------------------------- Students functions Begin Here -----------------------------------------*/
    //save message to database
    public function save(Request $request){
        $this->validate($request, [
            'uic_no'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'msge'=>'required'
        ]);

        $message=new ContactMsg();
        $message->uic_no = $request->uic_no;
        $message->first_name = $request->first_name;
        $message->last_name = $request->last_name;
        $message->message = $request->msge;
        $message->save();
        return redirect()->back()->with('message',"Message send successful");
    }

    /*-------------------------------------------------- Students functions End Here -----------------------------------------*/

}
