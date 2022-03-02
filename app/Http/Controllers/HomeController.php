<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{

    //
    public function adminp(){
        return Inertia::render('Adminpanel');
    }
    public function Category(){
        return Inertia::render('Category');
    }
    public function brand(){
        return Inertia::render('Brand');
    }
}
