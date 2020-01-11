<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = "purchases";
    //
    protected $fillable =[
		'cart',
		'ra',
		'address',
		'address1',
		'country',
		'phone',
		'zip_code',
		'status',
    ];
}