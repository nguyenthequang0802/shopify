<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'name', 'slug', 'description', 'preview_image', 'content', 'views', 'rating_num', 'rating_value',
        'seo_title', 'seo_keywords', 'seo_description', 'category_id'
    ];
    protected $with = ['category','images'];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'model_id');
    }
    public function deleteImages()
    {
        $images = Image::where('model_type', 'post')->where('model_id', $this->id)->get();
        foreach ($images as $image) {
            $image->delete();
        }
    }

    public static function boot() {
        parent::boot();
        static::deleting(function ($post){
            $post->deleteImages();
        });
    }

}
