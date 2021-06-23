<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'id',
        'item_Id',
        'quantity',
    ];

    protected $hidden =
    [
        'created_at',
        'updated_at',
    ];
}
