<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Listas extends Model
{

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function tipo_lista(): HasOne
    {
        return $this->hasOne(TipoListas::class);
    }

    public function valores(): HasMany
    {
        return $this->hasMany(ListaValores::class,'lista_id');
    }

}
