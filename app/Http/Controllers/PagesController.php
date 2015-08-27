<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Leader;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function home ()
    {
        $leaders = Leader::score(3);
        $i = 1;
    	return view('home', compact('leaders', 'i'));
    }

    public function leaders()
    {
        $leaders = Leader::score(20);
        $i = 1;
        return view('leaderboard', compact('leaders', 'i'));
    }

    function about ()
    {
    	return view('about');
    }

    function contact ()
    {
    	return view('contact');
    }
}
