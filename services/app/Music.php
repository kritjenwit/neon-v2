<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = [
        'music_name','album_name', 'music_type', 'artist', 'cover_url', 'music_url',
    ];


}
