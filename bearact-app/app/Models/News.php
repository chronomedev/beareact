<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory;
    use Sluggable;
    
    public $table = "news";
    
    protected $primaryKey = 'news_id';

    public $timestamps = true;

    protected $fillable = [
        'news_id',
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