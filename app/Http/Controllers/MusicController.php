<?php

namespace App\Http\Controllers;


use App\Models\Artist;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function redirectToAddMusicPage(){
        $artists = Artist::all();
        return view('add_music', compact('artists'));
    }

    public function addMusic(Request $request){
        // dd($request->all());
       $validated = $request->validate([
            'title' => 'required|unique:App\Models\Music,title|max:255',
            'image_input' => 'required|mimes:jpg,png',
            'artist' => 'required|string',
            'year' => 'required|numeric',
            'link' => 'required|string',
        ]);

        $path = $request->file('image_input');

        $music = Music::create([
            'title' => $request->title,
            'image_path' => $path,
            'artist_id' => $request->artist,
            'year' => $request->year,
            'link' => $request->link,
        ]);
        
        $fileName = $music->id . $path->getClientOriginalName();
        $path->storeAs('public/image_music', $fileName);
        $music->image_path = 'image_music/' . $fileName;
        $music->save();

        return redirect('/');
    }

    public function updateMusicPage($id)
    {
        $music = Music::findOrFail($id);
        $artists = Artist::all();
        return view('update_music', ["music" => $music, "artists" => $artists]);
    }
    public function updateMusic(Request $request, $id1){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image_input' => 'required|mimes:jpg,png',
            'artist' => 'required|string',
            'year' => 'required|numeric',
            'link' => 'required|string',
        ]);
        
        $music = Music::find($id1);
        Storage::delete('/public/' . $music->image_path);

        $path = $request->file('image_input');

        Music::findOrFail($id1)->update([
            'title' => $request->title,
            'image_path' => $path,
            'artist_id' => $request->artist,
            'year' => $request->year,
            'link' => $request->link,
        ]);
        
        $music = Music::find($id1);
        $fileName = $music->id . $path->getClientOriginalName();
        $path->storeAs('public/image_music', $fileName);
        $music->image_path = 'image_music/' . $fileName;
        $music->save();

        return redirect('/');
    }

    public function deleteMusic(Request $request, $id){
        $music = Music::find($id);

        Music::destroy($id);
        Storage::delete('/public/' . $music->image_path);

        return redirect('/');
    }
}
