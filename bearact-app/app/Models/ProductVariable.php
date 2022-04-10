<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariable extends Model
{
    use HasFactory;

    public $primaryKey = 'product_variable_id';

    public $table = "product_variable";

    protected $fillable = [
        'variable_name',
    ];
}
