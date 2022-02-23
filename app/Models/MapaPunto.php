<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MapaPunto extends Model
{
    use HasFactory;

    protected $fillable = ['lat', 'lng'];

    /**
     * @return BelongsTo
     */
    public function piezaClave(): BelongsTo
    {
        return $this->belongsTo(PiezaClave::class);
    }

    /**
     * @param  Builder  $query
     * @param $lat
     * @return Builder
     */
    public function scopeLat(Builder $query, $lat)
    {
        return $query->where('lat', $lat);
    }

    /**
     * @param  Builder  $query
     * @param $lng
     * @return mixed
     */
    public function scopeLng(Builder $query, $lng)
    {
        return $query->where('lng', $lng);
    }
}
