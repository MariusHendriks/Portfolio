<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 19-2-2018
 * Time: 20:06
 */

namespace App\Http\Controllers;


use App\WebsiteText;
use Illuminate\Http\Request;

class CourseEditController
{
    function index($course, $week){
        $coursesText = (new WebsiteText)
            ->where('course', '=', $course)
            ->where('week', '=', $week)
            ->get()
            ->first();
        if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1){
            return view ('courseedit', compact('coursesText'));
        }
        else{
            return response()->redirectToRoute('index');
        }
    }
    function store($course, $week, Request $request){
        $newText = $request->input('oldText');
        $coursesText = (new WebsiteText)
            ->where('course', '=', $course)
            ->where('week', '=', $week)
            ->get()
            ->first();
        $coursesText->textContent=$newText;
        $coursesText->save();
        return response()->redirectToRoute('courseEdit', ['course' => $course,'week' => $week]);
    }
}