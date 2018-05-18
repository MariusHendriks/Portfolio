<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8-4-2018
 * Time: 12:55
 */

namespace App\Http\Controllers;


use App\WebsiteText;

class EditTaskController extends Controller
{


    function index($course, $title){
      if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1){
        $textContent = (new WebsiteText)
            ->where('title', '=', $title)
            ->get()
            ->first();
        return view('editTask', ["textContent" => $textContent]);
      } else {
        return redirect('404');
      }
    }


    public function store($course, $title)
    {
        if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1){
        $this->validate(request(),[
            'title' => 'required',
            'sprint' => 'required',
            'week' => 'required',
            'course' => 'required',
            'proudness' => 'required'
        ]);
        $text = $textContent = (new WebsiteText)
            ->where('title', '=', $title)
            ->get()
            ->first();

        $text->update([
            'textContent' => request('content'),
            'week' => request('week'),
            'sprint' => request('sprint'),
            'title' => request('title'),
            'course' => request('course'),
            'proudness' => request('proudness'),
            'photopath' => request('filepath')
        ]);
        return redirect('/');
      } else {
        return redirect('404');
      }
    }
}
