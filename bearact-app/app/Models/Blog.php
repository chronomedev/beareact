<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    use Sluggable;
    
    public $table = "blog";
    
    protected $primaryKey = 'blog_id';

    public $timestamps = true;

    protected $fillable = [
        'blog_id',
        'slug',
        'title',
        'description',
        'image_path',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
