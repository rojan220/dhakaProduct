<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    //
    protected $fillable =[
		'name','parent_id'
    ];

    public function questions(){
        return $this->belongsTo(\App\Models\Question::class,'category_id');
    }
}
