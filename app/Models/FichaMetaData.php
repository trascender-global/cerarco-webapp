<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FichaMetaData extends Model
{

    protected $fillable = ['campo', 'valor', 'posicion', 'tipo', 'lista', 'ficha_id'];

    public function ficha(): BelongsTo
    {
        return $this->belongsTo(Ficha::class);
    }

}
