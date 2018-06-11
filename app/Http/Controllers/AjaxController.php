<?php

namespace App\Http\Controllers;


use App\WebsiteText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

  class AjaxController
  {
        public function index(){
          $msg = "This is a simple message.";
          //mijn data is mijn json response
          return response()->json(array('msg'=> $msg), 200);
       }
       public function showpage(){
          return view("ajax");
       }
  }
