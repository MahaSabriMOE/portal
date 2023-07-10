<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Cohensive\Embed\Facades\Embed;


class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','slug','descriptions','image_path','user_id','yturl'

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

   /* public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->video)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 400]);
        return $embed->getHtml();
    }*/


}
