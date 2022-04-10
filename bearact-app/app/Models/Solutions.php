<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Solutions extends Model
{
    use HasFactory;
    use Sluggable;

    public $table = "solutions";
    
    protected $primaryKey = 'solutions_id';

    public $timestamps = true;

    protected $fillable = [
        'solutions_id',
        'slug',
        'title',
        'content',
        'datasheet',
        'case_studies',
        'solutions_papers',
        'brochures',
        'guides',
        'videos',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
