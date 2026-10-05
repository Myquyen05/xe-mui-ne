<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    public function getEmbedUrlAttribute()
    {
        if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i', $this->youtube_url, $match)) {
            return 'https://www.youtube.com/embed/' . $match[1];
        }
        return $this->youtube_url;
    }
}
