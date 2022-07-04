<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'categories_id', 'judul', 'isi'];

    public function writer(){
        return $this->hasMany(Writer::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
