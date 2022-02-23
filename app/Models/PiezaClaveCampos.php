<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PiezaClaveCampos extends Model
{
    use HasFactory;

    public function categoria(): HasOne
    {
        return $this->hasOne(PiezaClaveCategorias::class);
    }
}
