<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFamily extends Model
{
    use HasFactory;

    public $primaryKey = 'product_family_id';

    public $table = "product_family";

    protected $fillable = [
        'family_name',
    ];
}
