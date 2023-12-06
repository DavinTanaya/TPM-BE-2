<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $list_music = Music::all();
        return view('welcome', [
            "list_music" => $list_music
        ]);
    }
}
