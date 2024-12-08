<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name','description','main_ingredients','time_added','cooking_duration','image','category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
