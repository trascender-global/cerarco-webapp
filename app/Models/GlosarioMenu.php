<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class GlosarioMenu extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $attributes = [
        'glosario_menu_id'   => 0,
        'mismo_contenido_id' => 0,
        'titulo'             => 0,
    ];

    protected $casts = [
        'titulo' => 'boolean',
    ];

    protected $fillable = ['nombre','slug','glosario_menu_id','titulo'];

    /**
     * @return BelongsTo
     */
    public function menuPadre(): BelongsTo
    {
        return $this->belongsTo($this, 'glosario_menu_id');
    }

    /**
     * @return HasMany
     */
    public function subMenus(): HasMany
    {
        return $this->hasMany($this, 'glosario_menu_id');
    }

    /**
     * @return HasOne
     */
    public function contenido(): HasOne
    {
        return $this->hasOne(GlosarioContenido::class, 'glosario_menu_id');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeEsTitulo($query)
    {
        return $query->where('titulo', true);
    }

    public function scopeMenuPrincipal($query)
    {
        return $query->where('glosario_menu_id', 0)
            ->where('id', '!=', 1);
    }

}
