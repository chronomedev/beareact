<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public $table = "slider";
    
    protected $primaryKey = 'slider_id';

    public $timestamps = true;

    protected $fillable = [
        'slider_id',
        'image_order',
        'image_slider'
    ];


}
