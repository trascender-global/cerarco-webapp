<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PiezaClaveDato extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];
    protected $fillable = ['pieza_clave_id', 'campo', 'valor', 'config', 'valor_slug','posicion'];

    protected $casts = [
        'config' => 'array',
    ];

    public function piezaClave(): BelongsTo
    {
        return $this->belongsTo(PiezaClave::class);
    }

    public function scopeBusqueda($query, $posicion)
    {
        return $query->where('posicion', $posicion);
    }

}
