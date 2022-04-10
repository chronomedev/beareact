<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BecomeReseller extends Model
{
    use HasFactory;

    public $table = "become_reseller";
    
    public $primaryKey = 'become_reseller_id';

    public $timestamps = true;

    protected $fillable = [
        'company_name',
        'web_url',
        'email',
        'phone_number',
        'company_address',
        'date_of_creation',
        'num_staff',
        'num_sales_staff',
        'num_engineer',
        'primary_business',
        'scope',
        'upload_doc'
    ];
}
