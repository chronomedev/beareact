<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public $primaryKey = 'product_category_id';

    public $table = "product_category";

    protected $fillable = [
        'category_name',
    ];
}
