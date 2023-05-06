<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayorSpeech extends Model
{
    use HasFactory;

    public function image(){
        return $this->morphOne(Image::class , 'imageable');
    }

}
