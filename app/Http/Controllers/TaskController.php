<?php
/**
 * Created by PhpStorm.
 * User: mariu
 * Date: 18-2-2018
 * Time: 15:03
 */

namespace App\Http\Controllers;


use App\WebsiteText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TaskController
{
    function index($course, $task){
        $textContent = (new WebsiteText)
            ->where('title', '=', $task)
            ->get()
            ->first();
        return view ('task', compact('textContent'));
    }
}
