<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shops extends Model
{
    use HasFactory;

    protected $fillable = [
        'Shop_name',
        'Shop_tel',
        'Shop_address',
        'Shop_email'
    ];
    protected $primaryKey = 'Shop_name';
    protected $keyType = 'string';
}
