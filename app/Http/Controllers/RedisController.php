<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class RedisController extends Controller
{
    //

    public function index(){
      $messages = Messages::all();
      $messages2 = Messages::all();

      return view ('messages',compact('messages','messages2'));

    }

    public function postSendMessage(Request $request){

      $messages = Messages::create($request->all());

      return redirect()->back();

    }

}
