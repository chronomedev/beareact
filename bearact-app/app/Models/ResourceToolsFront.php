<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceToolsFront extends Model
{
    use HasFactory;

    public $table = "resource_tools_front";
    
    protected $primaryKey = 'resource_tools_front_id';

    public $timestamps = true;

    protected $fillable = [
        'resource_tools_front_id',
        'order_resource',
        'content',
        'document',
        'application',
        'other_resource',
    ];
}
