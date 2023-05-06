<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'document_path',
        'description',
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

}
