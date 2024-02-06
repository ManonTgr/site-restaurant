<?php

namespace App\Models;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table ='categories';
    protected $primaryKey = 'id';

    public function plats()

    {
        return $this->hasMany(Plat::class, 'categorie_id', 'id')
        ->get();
    }
}
