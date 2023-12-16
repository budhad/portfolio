<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    //
    public function index() {
        $context = ['adverts' => Advert::latest()->get()];

        return view('adverts', $context);

        // $s = "Объявления\r\n\r\n";
        // foreach ($adverts as $advert) {
        //     $s .= $advert->title . "\r\n";
        //     $s .= $advert->price . "руб.\r\n";
        //     $s .= "\r\n";
        // }
        // return response($s)
        // ->header('Content-Type', 'text/plain');
    }
    
    public function detail(Advert $advert) {
        // $advert = Advert::find($advert);
        // if ( $advert == null);
        // $s = $advert->title . "\r\n";
        // $s .= $advert->price . "руб.\r\n";
        // $s .= "\r\n";
        // return response($s)->header('Content-Type', 'text/plain');
        $context = ['advert' => $advert];
        return view('advert', $context);
    }
}
