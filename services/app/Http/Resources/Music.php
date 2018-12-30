<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Music extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    private $coverUrl = 'http://neon.me/resources/covers/';
    private $musicUrl = 'http://neon.me/resources/musics/';

    public function toArray($request)
    {
        return [
            'music_name' => $this->music_name,
            'album_name' => $this->album_name ,
            'music_type' => $this->music_type,
            'artist' => $this->artist ,
            'cover_url' => $this->coverUrl.$this->cover_url,
            'music_url' => $this->musicUrl.$this->music_url,
        ];
    }
}
