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

class CourseController
{
    function index($course){
        $textContent = (new WebsiteText)
            ->where('course', '=', $course)
            ->get()
            ->sortBy('week')
            ->groupBy('sprint')
            ->sortByDesc('sprint');


        return view ('course', compact('textContent'));
    }
}
