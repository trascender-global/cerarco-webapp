<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FotosVariante extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['codigo', 'variante','foto','posicion'];

    /**
     * @return BelongsTo
     */
    public function modelo(): BelongsTo
    {
        return $this->belongsTo(Modelo::class);
    }

    public function getFotoAttribute($value): string
    {
        return !empty($value) ? asset('assets/modelos/'.$value) : '';
    }

    public function scopeVariante($query, $variante)
    {
        return $query->where('variante', $variante);
    }

    public function scopeCodigo($query, $codigo)
    {
        return $query->where('codigo', $codigo);
    }
}
