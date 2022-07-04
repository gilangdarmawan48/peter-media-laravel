<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function news(){
        return $this->belongsTo(News::class);
    }
}
