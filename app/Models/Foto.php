<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','variante','posicion'];

    /**
     * @return BelongsTo
     */
    public function modelo(): BelongsTo
    {
        return $this->belongsTo(Modelo::class);
    }

    /**
     * @param $value
     * @return string
     */
    public function getNameAttribute($value): string
    {
        return !empty($value) ? asset( 'assets/modelos/'.$value ) : '';
    }

    /**
     * @param $query
     * @param $variante
     * @return mixed
     */
    public function scopeVariante($query, $variante)
    {
        return $query->where('variante', $variante);
    }

}
