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
        return view('addTask');
    }

    public function store()
    {
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
                'photopath' => Purifier::clean(request('photopath'))
            ]);

        return redirect('/');
    }

}