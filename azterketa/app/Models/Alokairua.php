<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alokairua extends Model
{
    use HasFactory;
    protected $fillable = ['izena', 'yate_id'];

    public function yate()
    {
        return $this->belongsTo(Yate::class);
    }
}
