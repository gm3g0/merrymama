<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'email';
    protected $fillable = [
        'email',
        'count',
        'total'
    ];
}
