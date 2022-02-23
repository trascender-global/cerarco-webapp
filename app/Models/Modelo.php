<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modelo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['codigo', 'user_id'];

    protected $casts = [
        'metadata_modelo'        => 'array',
        'metadata_forma'         => 'array',
        'metadata_decorativa'    => 'array',
        'metadata_arqueometrica' => 'array',
    ];

    public static function ultimo_modelo(): Modelo
    {
        return Modelo::orderBy('created_at', 'desc')
            ->first();
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getFotosPiezasClaveAttribute()
    {
        $fotos = collect();
        $this->piezasClave->map(function ($pieza_clave) use ($fotos) {
            $pieza_clave->fotos->map(function ($foto) use ($fotos) {
                $fotos->push($foto);
            });
        });
        return $fotos;
    }

    public function piezasClave(): HasMany
    {
        return $this->hasMany(PiezaClave::class);
    }

    public function fotos(): HasMany
    {
        return $this->hasMany(Foto::class);
    }

    public function getDibujoAttribute($value): string
    {
        return !empty($value) ? asset('assets/modelos/'.$value) : '';
    }

    public function scopeFotosForma($query)
    {
        return $this->fotosVariante()->where('variante', 'forma')->groupBy(['codigo'])->inRandomOrder()->limit(6);
    }

    public function fotosVariante(): HasMany
    {
        return $this->hasMany(FotosVariante::class);
    }

    public function scopeFotoDetalleArqueometrica($query)
    {
        return $this->fotosVariante()->where('variante', 'arqueometrica')->inRandomOrder()->limit(6);
    }

    public function scopeFotoDetalleForma($query)
    {
        return $this->fotosVariante()->where('variante', 'forma')->inRandomOrder()->limit(6);
    }

    public function scopeFotosArqueometricas($query)
    {
        return $this->fotosVariante()->where('variante', 'arqueometrica')->inRandomOrder()->limit(6);
    }

    public function scopeFotosDecorativas($query)
    {
        return $this->fotosVariante()->where('variante', 'decorativa')->orderBy('codigo')->limit(6);
    }

}
