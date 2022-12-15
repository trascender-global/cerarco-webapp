<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ListaValores extends Model
{

    protected $fillable = ['valor', 'slug', 'lista_id'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function lista(): HasOne
    {
        return $this->hasOne(Listas::class);
    }

    public function scopeAreasGeograficas($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.datos_generales.area_geografica'));
    }

    public function scopeSubRegionGeografica($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.datos_generales.subregion_geografica'));
    }

    public function scopeDepartamentos($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.datos_generales.departamento'));
    }

    public function scopeConfiabilidadModelo($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.datos_generales.confiabilidad_del_modelo'));
    }

    public function scopeDecoracion($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.decoraciones.decoracion'));
    }

    public function scopeTratamientoSuperficie($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.decoraciones.tratamiento_superficie'));
    }

    public function scopeAcabadoSuperficie($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.descripcion_tecnica.acabado_superficie'));
    }

    public function scopeTecnicaManufactura($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.descripcion_tecnica.tecnica_manufactura'));
    }

    public function scopeTexturas($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.descripcion_tecnica.textura'));
    }

    public function scopeAmbienteCoccionTecnica($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.descripcion_tecnica.ambiente_coccion'));
    }

    public function scopeFormaBase($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.descripcion_formal.forma-base'));
    }
    
    public function scopeComposicionInorganicaAntiplastico($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.petrografia.composicion_inorganica'));
    }

    public function scopeComposicionOrganicaAntiplastico($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.petrografia.composicion_organica'));
    }

    public function scopeFormaGranosAntiplastico($query)
    {
        return $query->where('lista_id', config('constants.lista_valores.petrografia.forma_granos'));
    }

}
