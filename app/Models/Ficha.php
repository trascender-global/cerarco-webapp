<?php

namespace App\Models;

use App\Models\FichaMetaData as Valores;
use App\Services\Fichas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ficha extends Model
{
    protected $fillable = ['codigo_modelo', 'user_id'];

    public function valores(): HasMany
    {
        return $this->hasMany(Valores::class);
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function ultima_ficha() : Ficha
    {
        return Ficha::orderBy('created_at' , 'desc')
            ->first();
    }

}
