<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MessagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){ //new index method
        $inputs = Message::with('userFrom')->where('user_id_to', Auth::id())->notDeleted()->get(); //message

        //dd($inputs);
        return view('home')->with('inputs', $inputs);
       
        
    }

    public function create(int $id = 0, String $subject = ' ') {
        if ($id === 0){
            $users = User::where('id', '!=', Auth::id())->get();
        } else {
            $users = User::where('id', $id)->get();
        }
        //if ($subject !== ' ') $subject = 'Re: ' . $subject;
        //dd($users);
        return view('create')->with(['users'=> $users, 'subject' => $subject]);
    }

    public function send(Request $request) {
        $this->validate($request, [
            'subject' => 'required',
            'message' => 'required'
        ]);

        $message = new Message(); //new message
        $message->user_id_from = Auth::id();
        $message->user_id_to = $request->input('to');
        $message->subject = $request->input('subject');
        $message->body = $request->input('message');
        $message->save();


        return redirect()->to('/home')->with('status', 'Message sent !');
    }

    public function sent(){
        $inputs = Message::with('userTo')->where('user_id_from', Auth::id())->orderBy('created_at', 'desc')->get();

        return view('sent')->with('inputs', $inputs);
    }

    public function read(int $id){
        $message = Message::with('userFrom')->find($id);
        $message->read = true;
        $message->save();

        return view('read')->with('message', $message);

    }

    public function delete(int $id){
        $message = Message::find($id);
        $message->deleted = true;
        $message->save();

        return redirect()->to('/chatbox')->with('status', 'Message deleted!');
    }

    public function deleted(){ 
        $inputs = Message::with('userFrom')->where('user_id_to', Auth::id())->deleted()->get(); //message

        //dd($inputs);
        return view('deleted')->with('inputs', $inputs);
    }

    public function return(int $id) { //return method
        $message = Message::find($id);
        $message->deleted = false;
        $message->save();

        return redirect()->to('/deleted');
    }
}
