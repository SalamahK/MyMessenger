<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        
        $users = User::with('userName')->where('name', Auth::id())->get();
        $inputs = Message::with('userFrom')->where('user_id_to', Auth::id())->notDeleted()->get(); 

        return view('inbox', compact('users', 'inputs'));
        // return view('contacts')->with(['users'=> $users]);
    }

    public function select(int $id = 0) {
        if ($id === 0){
            $users = User::where('id', '!=', Auth::id())->get();
        } else {
            $users = User::where('id', $id)->get();
        }
        
        //dd($users);
        return view('inbox')->with(['users'=> $users]);

   
    }

}

