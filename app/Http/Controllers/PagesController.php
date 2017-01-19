<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Andy', 'Budi', 'Arif', 'Ibnu'];

        return view('pages.home', compact('people'));
    }

    public function mine()
    {
        return view('pages.mine');
    }    
}
