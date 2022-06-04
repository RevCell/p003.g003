<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent()
    {
      return $this->belongsTo(Category::class, 'category_id');
    }

    public function sub_cat()
    {
        return $this->hasMany(Category::class,"category_id");
    }

    public function getallchildren()
    {
        $x1=$this->sub_cat()->pluck("id");
        return Product::query()->whereIn("category_id",$x1)->get();
    }
}
