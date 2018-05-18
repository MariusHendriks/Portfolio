<?php
/**
 * Created by PhpStorm.
 * User: mariu
 * Date: 21-2-2018
 * Time: 11:03
 */

namespace App\Http\Controllers;


use App\WebsiteText;
use Mews\Purifier\Facades\Purifier;

class AddTaskController extends Controller
{
    function index(){

    }

    public function create()
    {
        if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1){
          return view('addTask');
        } else {
          return view('404');
        }
    }

    public function store()
    {
      if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1){
        $this->validate(request(),[
            'title' => 'required',
            'sprint' => 'required',
            'week' => 'required',
            'course' => 'required',
            'proudness' => 'required'
        ]);

        (new \App\WebsiteText)->create([
                'textContent' => Purifier::clean(request('content')),
                'week' => request('week'),
                'sprint' => request('sprint'),
                'title' => (request('title')),
                'course' => (request('course')),
                'proudness' => request('proudness'),
                'photopath' => (request('filepath'))
            ]);

        return redirect('/');
      } else {
        redirect('404');
      }
    }

}
