<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yate extends Model
{
    use HasFactory;

    protected $fillable = ['izena', 'fabrikazio_urtea', 'bidaiari_kopurua'];

    public function alokairuas()
    {
        return $this->hasMany(Alokairua::class);
    }
}
