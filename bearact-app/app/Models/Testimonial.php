<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public $table = "testimonial";
    
    protected $primaryKey = 'testimonial_id';

    public $timestamps = true;

    protected $fillable = [
        'testimonial_id',
        'image_order',
        'image_testimonial',
        'title',
        'description',
        'position',
        'place'
    ];
}
