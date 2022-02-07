<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicikla extends Model
{
    protected $fillable = [
        'model', 'boja', 'materijal','stanje','uzrast','cena'
    ];
    use HasFactory;
    public function rezervacijas(){
        return $this->hasMany(Rezervacija::class);
    }
}
