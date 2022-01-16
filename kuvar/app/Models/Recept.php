<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vrsta()
    {
        return $this->belongsTo(Vrsta::class);
    }

    public function zemlja()
    {
        return $this->belongsTo(Zemlja::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
