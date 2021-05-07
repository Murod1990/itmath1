<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pytc extends Model
{
   protected $table = 'pytcs';
   public $timestamps = false;
   protected $fillable = [
       'id',
       'mavzu',
       'mavzu_title',
       'Video',
       'video_title',
       'kod',
       'kod_title'
   ];
   
    
}
