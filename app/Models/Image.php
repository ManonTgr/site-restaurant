<?php

namespace App\Models;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table ='image';
    protected $primaryKey = 'id';

    public function articles()

    {
        return $this->belongsToMany(Article::class,'article_image','image_id','article_id')
        ->orderBy('titre','asc')
        ->get();
    }
}
