<?php
/**
 * Created by PhpStorm.
 * User: mariu
 * Date: 21-2-2018
 * Time: 11:03
 */

namespace App\Http\Controllers;

class 404Controller extends Controller
{
    function index(){
       return redirect('/');
    }

}
