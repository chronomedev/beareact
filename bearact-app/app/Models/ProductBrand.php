<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    use HasFactory;
    
    public $primaryKey = 'product_brand_id';

    public $table = "product_brand";

    protected $fillable = [
        'brand_name',
    ];
}
