<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    public $table = "product_detail";

    protected $primaryKey = "product_detail_id";

    protected $fillable = [
        'product_detail_id',
        'product_code',
        'product_category_id',
        'product_type_id',
        'product_description',
        'meta_tag',
        'meta_description',
        'var_ghz',
        'var_mbps',
        'var_dbi',
        'var_mw',
    ];

    
    public function product(){
        return $this->hasOne(Product::class, 'product_id');
    }
}
