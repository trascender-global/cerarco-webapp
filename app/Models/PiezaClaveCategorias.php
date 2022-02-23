<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PiezaClaveCategorias extends Model
{
    use HasFactory;

    public function campos(): HasMany
    {
        return $this->hasMany(PiezaClaveCampos::class);
    }
}
