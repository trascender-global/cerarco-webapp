<?php

use App\Models\Modelo;

if (!function_exists('getSubRegionGeografica')) {
    function getSubRegionGeografica()
    {
        return cache_lista_valores('sub_regiones_geograficas', 'subRegionGeografica');
    }
}

if (!function_exists('getAreasGeograficas')) {
    function getAreasGeograficas()
    {
        return cache_lista_valores('areas_geograficas', 'areasGeograficas');
    }
}

if (!function_exists('getDepartamentos')) {
    function getDepartamentos()
    {
        return cache_lista_valores('departamentos', 'departamentos');
    }
}

if (!function_exists('getConfiabilidadModelo')) {
    function getConfiabilidadModelo()
    {
        return cache_lista_valores('confiabilidad_modelos', 'confiabilidadModelo');
    }
}

if (!function_exists('getDecoracion')) {
    function getDecoracion()
    {
        return cache_lista_valores('decoracion', 'decoracion');
    }
}

if (!function_exists('getTratamientoSuperficie')) {
    function getTratamientoSuperficie()
    {
        return cache_lista_valores('tratamiento_superficie', 'tratamientoSuperficie');
    }
}

if (!function_exists('getAcabadoSuperficie')) {
    function getAcabadoSuperficie()
    {
        return cache_lista_valores('acabado_superficie', 'acabadoSuperficie');
    }
}

if (!function_exists('getTecnicaManufactura')) {
    function getTecnicaManufactura()
    {
        return cache_lista_valores('tecnica_manufactura', 'tecnicaManufactura');
    }
}

if (!function_exists('getTexturas')) {
    function getTexturas()
    {
        return cache_lista_valores('texturas', 'texturas');
    }
}

if (!function_exists('getAmbienteCoccion')) {
    function getAmbienteCoccion()
    {
        return cache_lista_valores('ambiente_coccion_tecnica', 'ambienteCoccionTecnica');
    }
}

if (!function_exists('getFormaBase')) {
    function getFormaBase()
    {
        return cache_lista_valores('forma_base', 'formaBase');
    }
}

if (!function_exists('getClasificaionesExistentes')) {
    function getClasificaionesExistentes()
    {
        return cache_lista_valores('clasificacion_existente', 'clasificacionExistente');
    }
}


if (!function_exists('getComposicionInorganicaAntiplastico')) {
    function getComposicionInorganicaAntiplastico()
    {
        return cache_lista_valores('composicion_inorganica_antiplastico', 'ComposicionInorganicaAntiplastico');
    }
}

if (!function_exists('getComposicionOrganicaAntiplastico')) {
    function getComposicionOrganicaAntiplastico()
    {
        return cache_lista_valores('composicion_organica_antiplastico', 'ComposicionOrganicaAntiplastico');
    }
}

if (!function_exists('getFormaGranosAntiplastico')) {
    function getFormaGranosAntiplastico()
    {
        return cache_lista_valores('forma_granos_antiplastico', 'FormaGranosAntiplastico');
    }
}

if (!function_exists('getFichasModeloDescripcion')) {
    function getFichasModeloDescripcion(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Descripción formal (resumen)', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloNombre')) {
    function getFichasModeloNombre(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Nombre', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloFormaDescripcion')) {
    function getFichasModeloFormaDescripcion(array $detalle, string $index = 'Descripción')
    {
        return mostrarTextoFichas($detalle[$index]['Descripción formal (resumen)']['valor']);
    }
}

if (!function_exists('getFichasModeloFormaAreaGeografica')) {
    function getFichasModeloFormaAreaGeografica(array $detalle, string $index = 'Descripción')
    {
        return mostrarTextoFichas($detalle[$index]['Área geográfica']['valor']);
    }
}

if (!function_exists('getFichasModeloFormaSubRegionGeografica')) {
    function getFichasModeloFormaSubRegionGeografica(array $detalle, string $index = 'Descripción')
    {
        return mostrarTextoFichas($detalle[$index]['Subregión geográfica']['valor']);
    }
}

if (!function_exists('getFichasModeloFormaDepartamento')) {
    function getFichasModeloFormaDepartamento(array $detalle, string $index = 'Descripción')
    {
        return mostrarTextoFichas($detalle[$index]['Departamento']['valor']);
    }
}

if (!function_exists('getFichasModeloFormaMunicipioHallazgo')) {
    function getFichasModeloFormaMunicipioHallazgo(array $detalle, string $index = 'Descripción')
    {
        return mostrarTextoFichas($detalle[$index]['Municipio de hallazgo']['valor']);
    }
}

if (!function_exists('getFichasModeloFormaConfiabilidad')) {
    function getFichasModeloFormaConfiabilidad(array $detalle, string $index = 'Descripción')
    {
        return mostrarTextoFichas($detalle[$index]['Confiabilidad del Modelo']['valor']);
    }
}

if (!function_exists('getFichasModeloAreaGeografica')) {
    function getFichasModeloAreaGeografica(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Área geográfica', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloSubRegionGeografica')) {
    function getFichasModeloSubRegionGeografica(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Subregión geográfica', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloDepartamento')) {
    function getFichasModeloDepartamento(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Departamento', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloMunicipioHallazgo')) {
    function getFichasModeloMunicipioHallazgo(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Municipio de hallazgo', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloVarianteModeloAsociada')) {
    function getFichasModeloVarianteModeloAsociada(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Variantes de forma asociada', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloVarianteDecorativaAsociada')) {
    function getFichasModeloVarianteDecorativaAsociada(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Variantes decorativa asociada', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloSitioArqueologicoHallazgo')) {
    function getFichasModeloSitioArqueologicoHallazgo(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Variantes decorativa asociada', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloClasificacionExistente')) {
    function getFichasModeloClasificacionExistente(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Clasificación existente', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloConformadoPiezasProcedentes')) {
    function getFichasModeloConformadoPiezasProcedentes(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Modelo conformado por piezas procedentes de:', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloIntegridadPieza')) {
    function getFichasModeloIntegridadPieza(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Integridad de la pieza', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloFuncionPrimaria')) {
    function getFichasModeloFuncionPrimaria(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Funcion Primaria', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloContexto')) {
    function getFichasModeloContexto(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Contexto', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloConfiabilidadModelo')) {
    function getFichasModeloConfiabilidadModelo(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Confiabilidad del Modelo', 'metadata_modelo');
    }
}

if (!function_exists('getFichasModeloConfiabilidad')) {
    function getFichasModeloConfiabilidad(Modelo $modelo, string $index = 'Descripción')
    {
        return getFichaTextoDescripcion($modelo, $index, 'Confiabilidad del Modelo', 'metadata_modelo');
    }
}

if (!function_exists('getFichaTextoDescripcion')) {
    function getFichaTextoDescripcion(Modelo $modelo, string $index, string $campo, string $tipo_modelo)
    {
        return mostrarTextoFichas($modelo->$tipo_modelo[$index][$campo]['valor'] ?? '');
    }
}

if (!function_exists('mostrarTextoFichas')) {
    function mostrarTextoFichas($valor): string
    {
        return !empty(trim($valor))
            ? trim($valor)
            : '---';
    }
}

if (!function_exists('calcular_cronologia_minimo')) {
    function calcular_cronologia_minimo(\Illuminate\Database\Eloquent\Collection $datos_cronologia)
    {
        $minima       = 0;

        foreach ($datos_cronologia as $dato) {
            switch ($dato->posicion) {
                case config('fichas.columnas_detalle.Cronologia.Minima'):
                    $minima = (int) ($dato->valor ?? 0);
                    break;
            }
        }

        foreach ($datos_cronologia as $dato) {
            switch ($dato->posicion) {
                case config('fichas.columnas_detalle.Cronologia.Minima AC-DC'):
                    $minima = $dato->valor === 'a.C.' ? -1 * (int)abs($minima) : (int)abs($minima);
                    break;
            }
        }

        return $minima + 6000;
    }
}

if (!function_exists('calcular_cronologia_maximo')) {
    function calcular_cronologia_maximo(\Illuminate\Database\Eloquent\Collection $datos_cronologia)
    {
        $maxima      = 0;
        $maximo_acdc = 'dc';

        foreach ($datos_cronologia as $dato) {
            switch ($dato->posicion) {
                case config('fichas.columnas_detalle.Cronologia.Maxima'):
                    $maxima = (int) ($dato->valor ?? 0);
                    break;
                case config('fichas.columnas_detalle.Cronologia.Maxima AC-DC'):
                    $maximo_acdc = $dato->valor !== '' ?: 'd.C.';
                    break;
            }
        }
        return $maximo_acdc === true ? $maxima + 6000 : ($maxima * -1) + 6000;
    }
}

