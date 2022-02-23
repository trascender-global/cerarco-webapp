<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PiezaClaveFotos extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['foto','posicion'];

    /**
     * @return BelongsTo
     */
    public function piezaClave(): BelongsTo
    {
        return $this->belongsTo(PiezaClave::class);
    }

    /**
     * @param $value
     * @return string
     */
    public function getFotoAttribute($value): string
    {
        return !empty($value) ? asset( 'assets/modelos/'.$value ) : '';
    }

    /**
     * @param $query
     * @param $variante
     * @return mixed
     */
    public function scopePiezaClave($query, $variante)
    {
        return $query->where('pieza_clave_id', $variante);
    }

}

