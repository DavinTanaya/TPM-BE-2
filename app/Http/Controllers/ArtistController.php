<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function redirectToAddArtistPage(){
        return view('add_artist');
    }

    public function addArtist(Request $request){
        // dd($request->all());
       $validated = $request->validate([
            'artist_name' => 'required|string',
            'country' => 'required|string',
        ]);
        Artist::create([
            'artist_name' => $request->artist_name,
            'country' => $request->country,
        ]);

        return redirect('/');
    }


}
