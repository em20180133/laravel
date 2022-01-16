<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zemlja extends Model
{
    use HasFactory;

    public function recepti()
    {
        return $this->hasMany(Recept::class);
    }
}
