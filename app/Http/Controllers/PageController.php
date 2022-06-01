<?php

namespace App\Http\Controllers;

use App\Models\{city,store};
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function AboutPage(Request $request) {

        return view('about');
    }

    public function Brands(Request $request) {

        return view('brands');
    }
    public function Index(Request $request) {

        return view('Index');
    }

    public function Maisondeperfums(Request $request) {

        return view('Maisondeperfums');
    }

    public function Retail(Request $request) {

        return view('Retail');
    }


    public function Storelocator(Request $request) {

        $city=city::all();
        $store=store::all();
        return view('Storelocator',["storedata"=>$store,"storecity"=>$city]);
    }
}
