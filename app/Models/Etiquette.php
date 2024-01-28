<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquette extends Model
{
    use HasFactory;

    protected $table ='etiquettes';
    protected $primaryKey = 'id';

    public function plats()
    {
        return $this
            ->belongsToMany(Plat::class, 'etiquettes_plats', 'etiquettes_id','plats_id')
            ->get();
    
    }
}