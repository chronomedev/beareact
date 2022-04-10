<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    
    public $table = "logo";
    
    protected $primaryKey = 'logo_id';

    public $timestamps = true;

    protected $fillable = [
        'logo_id',
        'file_logo',
    ];
}