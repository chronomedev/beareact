<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    public $primaryKey = 'product_type_id';

    public $table = "product_type";

    protected $fillable = [
        'type_name',
    ];
}
