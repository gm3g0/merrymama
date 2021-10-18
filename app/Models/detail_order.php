<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_order extends Model
{
    use HasFactory;
    protected $primaryKey = 'detail_id';
    public $timestamps = false;
    protected $fillable = [
        'detail_id',
        'PName',
        'num' ,
        'cut' ,
        'remark' ,
        'order_id'
    ];
}
