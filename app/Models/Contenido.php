<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contenido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id'];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeCatalogo($query)
    {
        return $query->where('tipo', 'catalogo');
    }

    public function scopeTalleres($query)
    {
        return $query->where('tipo', 'talleres');
    }

    public function scopeNoticias($query)
    {
        return $query->where('tipo', 'noticias');
    }

    public function getImagenAttribute($value): string
    {
        return !empty($value) ? asset( 'assets/contenidos/'.$value ) : '';
    }


}
