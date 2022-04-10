<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceTools extends Model
{
    use HasFactory;
    
    public $table = "resource_tools";
    
    protected $primaryKey = 'resource_tools_id';

    public $timestamps = true;

    protected $fillable = [
        'product_brand_id',
        'resource_tools_id',
        'document_path',
        'app_path',
        'link_path',
    ];
}
