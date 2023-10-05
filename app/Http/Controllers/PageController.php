<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){


        return view('index');

    }

    public function about_us(){


        return view('about_us');

    }

    public function contact_us(){


        return view('contact_us');

    }

    public function our_products(){


        return view('our_products');

    }
}
