<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuccessStory extends Model
{
    use HasFactory;
    use Sluggable;
    
    public $table = "success_story";
    
    protected $primaryKey = 'success_story_id';

    public $timestamps = true;

    protected $fillable = [
        'success_story_id',
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