<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    protected $table ='plats';
    protected $primaryKey = 'id';

    public function categorie()

    {
        return $this
        ->belongsTo(Bar::class, 'categories_id', 'id')
        ->get();
    }
}
