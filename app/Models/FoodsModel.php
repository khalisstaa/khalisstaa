<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodsModel extends Model
{
   
    use HasFactory;

     protected $table = "foods";

    public function getCategory(){
        return
        $this->belongsTo(CategoryModel::class, "category_id");
    }
}
