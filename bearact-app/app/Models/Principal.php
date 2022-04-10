<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    use HasFactory;

    public $table = "principal";
    
    protected $primaryKey = 'principal_id';

    public $timestamps = true;

    protected $fillable = [
        'principal_id',
        'image_order',
        'image_principal'
    ];
}
