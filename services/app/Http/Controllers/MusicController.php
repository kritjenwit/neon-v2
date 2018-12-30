<?php

namespace App\Http\Controllers;

use App\Music;
use App\Http\Resources\Music as MusicResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MusicController extends Controller
{


    public function index()
    {
        $music = Music::orderBy('id', 'DESC')->paginate(6);
        return MusicResource::collection($music);
    }

    public function show($id)
    {
        $music = Music::findOrFail($id);
        return new MusicResource($music);
    }

    public function create(Request $request)
    {
        $music = Music::where('music_name',$request->music_name)->get()->toArray();
        if($music)
            return response()->json(Helpers::sendWith(400,NULL,'This music is already in a record'));

        $music = new Music;
        $music->music_name = $request->input('music_name');
        $music->album_name = $request->input('album_name');
        $music->music_type = $request->input('music_type');
        $music->artist = $request->input('artist');
        $music->cover_url = $request->input('cover_url');
        $music->music_url = $request->input('music_url');
        if($music->save()){
            return new MusicResource($music);
        }
        return $request;
    }
}
