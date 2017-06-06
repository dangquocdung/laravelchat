<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class RedisController extends Controller
{
    //

    public function index(){
      $messages = Messages::all();

      return view ('messages',compact('messages'));

    }

}
