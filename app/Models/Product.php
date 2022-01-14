<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo('App\Models\CategoryProduct','category_id','id');    
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\BrandProduct','brand_id','id');    
    }
    public function orderdetail()
    {
        return $this->hasMany('App\Models\OrderDetail', 'product_id', 'id');
    }
    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'product_id', 'id');
    }
    public function gallery()
    {
        return $this->hasMany('App\Models\Gallery', 'product_id', 'id');
    }
    public function rating()
    {
        return $this->hasMany('App\Models\Rating', 'product_id','id');
    }
}
