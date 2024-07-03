<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'specialization',
    ];

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
}
