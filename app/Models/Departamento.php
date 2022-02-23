<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = ['codigo', 'nombre'];

    public function ciudades()
    {
        return $this->hasMany(Ciudad::class);
    }

}
