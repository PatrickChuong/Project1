<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'order_id',
        'menu_item',
        'quantity',
    ];

    protected $hidden =
    [
        'created_at',
        'updated_at',
    ];
}
