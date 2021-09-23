<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class takedate_order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'tekedate_time';
    protected $fillable = [
        'tekedate_time',
        'total',
        'order_count'
    ];
}
