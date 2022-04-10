<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientLogo extends Model
{
    use HasFactory;

    public $table = "client_logo";
    
    protected $primaryKey = 'client_logo_id';

    public $timestamps = true;

    protected $fillable = [
        'client_logo_id',
        'image_order',
        'image_client'
    ];

}
