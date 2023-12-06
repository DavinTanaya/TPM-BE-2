<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function redirectToAddMusicPage(){
        return view('add_music');
    }

    public function addMusic(Request $request){
        // dd($request->all());
        Music::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'year' => $request->year,
            'link' => $request->link,
        ]);
        
        return redirect('/');
    }
}
