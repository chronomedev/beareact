<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    use HasFactory;

    public $table = "product_specification";
    protected $primaryKey = 'product_specification_id';
    public $timestamps = false;

    protected $fillable = [
        'product_specification_id',
        'product_id ',
        'product_variable_id ',
        'value',
    ];

    // public function categories(){
    //     return $this->belongsToMany(ProductCategory::class, 'product_category_id');
    // }

    // public function productDetail(){
    //     return $this->hasMany(ProductDetail::class, 'product_detail_id');
    // }

    // protected $casts = [
    //     'variable_name' => 'array'
    // ];
}
