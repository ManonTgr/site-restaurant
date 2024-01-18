<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $primaryKey = 'id';

    public function images()

    {
        return $this
        ->belongsToMany(Image::class,'article_image','article_id','image_id')
        ->orderBy('titre')
        ->get();
    }

}

