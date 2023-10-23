<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){

        SEOTools::setTitle('Jafro Foods Ltd.');
        SEOTools::setDescription("Explore the finest African chin chin at Jafro Foods. Discover authentic flavors and quality in every bite. Your journey to the heart of Africa's taste begins here.");
        // SEOTools::opengraph()->setUrl('http://current.url.com');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(config('app.url').'/images/resource/about-44.jpg');

        OpenGraph::addImage(['url' => config('app.url').'/images/resource/about-44.jpg', 'size' => 300]);
        OpenGraph::addImage(config('app.url').'/images/resource/about-44.jpg', ['height' => 300, 'width' => 300]);



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
