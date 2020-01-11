<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    //
    protected $fillable =[
		'name',
		'in_stock',
		'category_id',
		'quantity',
		'rating',
        'image'
    ];

    public function categories(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
