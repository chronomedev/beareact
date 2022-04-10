<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = "product";
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_id',
        'product_name',
        'product_path',
        'product_detail_id'
    ];

    public function categories(){
        return $this->belongsToMany(ProductCategory::class, 'product_category_id');
    }

    public function productDetail(){
        return $this->hasMany(ProductDetail::class, 'product_detail_id');
    }

    // protected $casts = [
    //     'variable_name' => 'array'
    // ];
}
