<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PiezaClave extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pieza_clave', 'modelo_id'];

    /**
     * @return BelongsTo
     */
    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    /**
     * @return HasMany
     */
    public function datos()
    {
        return $this->hasMany(PiezaClaveDato::class);
    }

    /**
     * @return HasMany
     */
    public function datos_cronologia(): HasMany
    {
        return $this->hasMany(PiezaClaveDato::class)
            ->where('pieza_clave_id', $this->id)
            ->where(function ($query) {
                return $query->orWhere('posicion', config('fichas.columnas_detalle.Cronologia.Maxima'))
                    ->orWhere('posicion', config('fichas.columnas_detalle.Cronologia.Maxima AC-DC'))
                    ->orWhere('posicion', config('fichas.columnas_detalle.Cronologia.Minima'))
                    ->orWhere('posicion', config('fichas.columnas_detalle.Cronologia.Minima AC-DC'));
            });
    }

    /**
     * @param $value
     * @return string
     */
    public function getDibujoAttribute($value): string
    {
        return ($this->dibujos()->count() > 0) ? ($this->dibujos()->first()->foto ?? '') : '';
    }

    /**
     * @return HasMany
     */
    public function fotos(): HasMany
    {
        return $this->hasMany(PiezaClaveFotos::class);
    }

    /**
     * @return HasMany
     */
    public function dibujos(): HasMany
    {
        return $this->hasMany(PiezaClaveDibujos::class);
    }

    /**
     * @return HasMany
     */
    public function puntos(): HasMany
    {
        return $this->hasMany(MapaPunto::class);
    }

}
