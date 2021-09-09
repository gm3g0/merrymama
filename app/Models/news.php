<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'news_pic',
        'news_time'
    ];
}
