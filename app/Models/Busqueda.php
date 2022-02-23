<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Busqueda extends Model
{
    use HasFactory;

    public function piezaClave(): BelongsTo
    {
        return $this->belongsTo(PiezaClave::class);
    }

}
