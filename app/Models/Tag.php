<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    use HasFactory;

    //many tags may belong to many articles
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
}
