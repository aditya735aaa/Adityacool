<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function beranda()
    {
        return view('frontend.beranda');
    }
    public function akademik()
    {
        return view('frontend.akademik');
    }
    public function penelitian()
    {
        return view('frontend.penelitian');
    }

    public function frontend(){
        return response()->json([
            "hai"=>"hai"
        ]);
    }
}
