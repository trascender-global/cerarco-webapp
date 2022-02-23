<?php

namespace Database\Seeders;

use App\Models\PiezaClaveCampos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PiezaClaveCamposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('pieza_clave_campos')->truncate();

        PiezaClaveCampos::create([
            'campo' => 'Pieza Clave',
            'slug' => Str::kebab('otros Pieza Clave'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.otros')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Nombre',
            'slug' => Str::kebab('dg Nombre'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Descripción formal (resumen)',
            'slug' => Str::kebab('dg Descripcion formal resumen'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Código de modelo',
            'slug' => Str::kebab('dg Codigo modelo'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Variantes de forma asociada',
            'slug' => Str::kebab('dg Variantes forma asociada'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Variante decorativa asociada',
            'slug' => Str::kebab('dg Variante decorativa asociada'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Variante arqueométrica asociada',
            'slug' => Str::kebab('dg Variante arqueometrica asociada'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Área geográfica',
            'slug' => Str::kebab('dg Area geografica'),
            'lista' => config('constants.lista_valores.datos_generales.area_geografica'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Subregión geográfica',
            'slug' => Str::kebab('dg Subregion geografica'),
            'lista' => config('constants.lista_valores.datos_generales.subregion_geografica'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Departamento',
            'slug' => Str::kebab('dg Departamento'),
            'lista' => config('constants.lista_valores.datos_generales.departamento'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Municipio de hallazgo',
            'slug' => Str::kebab('dg Municipio hallazgo'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Sitio arqueológico de hallazgo',
            'slug' => Str::kebab('dg Sitio arqueologico hallazgo'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Clasificación existente',
            'slug' => Str::kebab('dg Clasificacion existente'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Confiabilidad del Modelo',
            'slug' => Str::kebab('dg Confiabilidad Modelo'),
            'lista' => config('constants.lista_valores.datos_generales.confiabilidad_del_modelo'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Modelo conformado por piezas procedentes de:',
            'slug' => Str::kebab('dg Modelo conformado piezas procedentes'),
            'lista' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Integridad de la pieza',
            'slug' => Str::kebab('dg Integridad pieza'),
            'lista' => config('constants.lista_valores.datos_generales.integridad_de_la_pieza'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Funcion Primaria',
            'slug' => Str::kebab('dg Funcion Primaria'),
            'lista' => config('constants.lista_valores.datos_generales.funcion_primaria'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Contexto',
            'slug' => Str::kebab('dg Contexto'),
            'lista' => config('constants.lista_valores.datos_generales.contexto'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Pieza Clave Por',
            'slug' => Str::kebab('dg Pieza Clave Por'),
            'lista' => config('constants.lista_valores.datos_generales.contexto'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.datos_generales')
        ]);

        /* ------- */
        PiezaClaveCampos::create([
            'campo' => 'Cronología',
            'slug' => Str::kebab('Cronología'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.cronologia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Maxima',
            'slug' => Str::kebab('Maxima'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.cronologia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Maxima AC-DC',
            'slug' => Str::kebab('Maxima ac-dc'),
            'lista' => config('constants.lista_valores.cronologia_del_modelo.ac_dc'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.cronologia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Minima',
            'slug' => Str::kebab('Minima'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.cronologia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Minima AC-DC',
            'slug' => Str::kebab('Minima ac-dc'),
            'lista' => config('constants.lista_valores.cronologia_del_modelo.ac_dc'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.cronologia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Cronología relativa',
            'slug' => Str::kebab('pc Cronologia relativa'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.cronologia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Método de datación',
            'slug' => Str::kebab('pc Metodo de datacion'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.cronologia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Códigos de laboratorio',
            'slug' => Str::kebab('pc Codigos de laboratorio'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.cronologia')
        ]);

        /*------*/
        PiezaClaveCampos::create([
            'campo' => 'Localización dentro de la forma',
            'slug' => Str::kebab('fr Localizacion dentro forma'),
            'lista' => config('constants.lista_valores.fragmento.localizacion_dentro_forma'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.fragmento')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Porcentaje en la forma',
            'slug' => Str::kebab('fr Porcentaje forma'),
            'lista' => config('constants.lista_valores.fragmento.porcentaje_forma'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.fragmento')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Confiabilidad de la reconstrucción',
            'slug' => Str::kebab('fr Confiabilidad reconstruccion'),
            'lista' => config('constants.lista_valores.fragmento.confiabilidad_reconstruccion'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.fragmento')
        ]);

        /*------*/
        PiezaClaveCampos::create([
            'campo' => 'Procedencia y seguridad del hallazgo',
            'slug' => Str::kebab('cot Procedencia seguridad hallazgo'),
            'lista' => config('constants.lista_valores.contexto.procedencia_seguridad_hallazgo'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.contexto')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Procedencia, relaciones y seguridad de la pieza (o fragmento)',
            'slug' => Str::kebab('cot Procedencia relaciones seguridad pieza'),
            'lista' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.contexto')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Observaciones sobre el hallazgo',
            'slug' => Str::kebab('cot Observaciones sobre hallazgo'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.contexto')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Ubicación actual',
            'slug' => Str::kebab('cot Ubicacion actual'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.contexto')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Código de la pieza',
            'slug' => Str::kebab('cot Codigo pieza'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.contexto')
        ]);

        /*----------*/

        PiezaClaveCampos::create([
            'campo' => 'Alto (promedio)',
            'slug' => Str::kebab('des for Alto promedio'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Ancho (promedio)',
            'slug' => Str::kebab('des for Ancho promedio'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Espesor promedio',
            'slug' => Str::kebab('des for espesor promedio'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Espesor en el borde',
            'slug' => Str::kebab('des for espesor borde'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Espesor en el cuerpo',
            'slug' => Str::kebab('des for espesor cuerpo'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Espesor en la base',
            'slug' => Str::kebab('des for espesor base'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Forma base',
            'slug' => Str::kebab('des for forma base'),
            'lista' => config('constants.lista_valores.descripcion_formal.forma-base'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Boca',
            'slug' => Str::kebab('des for boca'),
            'lista' => config('constants.lista_valores.descripcion_formal.boca'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Borde',
            'slug' => Str::kebab('des for borde'),
            'lista' => config('constants.lista_valores.descripcion_formal.borde'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Labio',
            'slug' => Str::kebab('des for labio'),
            'lista' => config('constants.lista_valores.descripcion_formal.labio'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Cuello',
            'slug' => Str::kebab('des for cuello'),
            'lista' => config('constants.lista_valores.descripcion_formal.cuello'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Hombro',
            'slug' => Str::kebab('des for hombro'),
            'lista' => config('constants.lista_valores.descripcion_formal.hombro'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Cuerpo',
            'slug' => Str::kebab('des for cuerpo'),
            'lista' => config('constants.lista_valores.descripcion_formal.cuerpo'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Fondo',
            'slug' => Str::kebab('des for fondo'),
            'lista' => config('constants.lista_valores.descripcion_formal.fondo'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Base',
            'slug' => Str::kebab('des for base'),
            'lista' => config('constants.lista_valores.descripcion_formal.base'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Soporte',
            'slug' => Str::kebab('des for soporte'),
            'lista' => config('constants.lista_valores.descripcion_formal.soporte'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Asa',
            'slug' => Str::kebab('des for asa'),
            'lista' => config('constants.lista_valores.descripcion_formal.asa'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Agarradera',
            'slug' => Str::kebab('des for agarradera'),
            'lista' => config('constants.lista_valores.descripcion_formal.agarradera'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Mango',
            'slug' => Str::kebab('des for mango'),
            'lista' => config('constants.lista_valores.descripcion_formal.mango'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Vertedera',
            'slug' => Str::kebab('des for vertedera'),
            'lista' => config('constants.lista_valores.descripcion_formal.vertedera'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Caras (sellos)',
            'slug' => Str::kebab('des for caras'),
            'lista' => config('constants.lista_valores.descripcion_formal.caras'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Tipo de figurina',
            'slug' => Str::kebab('des for tipo figurina'),
            'lista' => config('constants.lista_valores.descripcion_formal.tipo_de_figurina'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Tipo de instrumento musical',
            'lista' => config('constants.lista_valores.descripcion_formal.tipo_de_instrumento'),
            'slug' => Str::kebab('des for tipo instrumento musical'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Diámetro hueco promedio (rodillos)',
            'slug' => Str::kebab('des for diametro hueco promedio'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Diámetro externo promedio (rodillos-volantes de huso)',
            'slug' => Str::kebab('des for diametro externo promedio'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Observaciones descripción formal',
            'slug' => Str::kebab('des for observaciones descripcion formal'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_formal')
        ]);

        /*----------*/
        PiezaClaveCampos::create([
            'campo' => 'Descripción',
            'slug' => Str::kebab('dec descripcion'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Tratamiento de la superficie',
            'slug' => Str::kebab('dec tratamiento superficie'),
            'lista' => config('constants.lista_valores.decoraciones.tratamiento_superficie'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Decoración 1',
            'slug' => Str::kebab('dec decoracion 1'),
            'lista' => config('constants.lista_valores.decoraciones.decoracion'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Decoración 2',
            'lista' => config('constants.lista_valores.decoraciones.decoracion'),
            'slug' => Str::kebab('dec decoracion 2'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Decoración 3',
            'lista' => config('constants.lista_valores.decoraciones.decoracion'),
            'slug' => Str::kebab('dec decoracion 3'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Localización dentro de la forma',
            'lista' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma'),
            'slug' => Str::kebab('dec localizacion dentro de la forma'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Color (engobe, si tiene) - Código Munsell',
            'slug' => Str::kebab('dec color engobe codigo munsell'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Color (engobe, si tiene) - Nombre Munsell',
            'slug' => Str::kebab('dec color engobe nombre munsell'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Color (pintura, si tiene) - Código Munsell',
            'slug' => Str::kebab('dec color pintura codigo munsell'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Color (pintura, si tiene) - Nombre Munsell',
            'slug' => Str::kebab('dec color pintura nombre munsell'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Observaciones decoración',
            'slug' => Str::kebab('dec orservaciones decoracion'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.decoracion')
        ]);

        /*----------*/
        PiezaClaveCampos::create([
            'campo' => 'Técnica de manufactura',
            'slug' => Str::kebab('dect tecnica manufactura'),
            'lista' => config('constants.lista_valores.descripcion_tecnica.tecnica_manufactura'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Tratamiento de la superficie',
            'slug' => Str::kebab('dect tratamiento superficie'),
            'lista' => config('constants.lista_valores.decoraciones.tratamiento_superficie'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Acabado de la superficie interna',
            'slug' => Str::kebab('dect acabado superficie interna'),
            'lista' => config('constants.lista_valores.descripcion_tecnica.acabado_superficie'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Acabado de la superficie externa',
            'slug' => Str::kebab('dect acabado superficie externa'),
            'lista' => config('constants.lista_valores.descripcion_tecnica.acabado_superficie'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Textura (interna)',
            'slug' => Str::kebab('dect textura interna'),
            'lista' => config('constants.lista_valores.descripcion_tecnica.textura'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Textura (externa)',
            'slug' => Str::kebab('dect textura externa'),
            'lista' => config('constants.lista_valores.descripcion_tecnica.textura'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Granulometría',
            'slug' => Str::kebab('dect granulometria'),
            'lista' => config('constants.lista_valores.descripcion_tecnica.granulometria'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Color Pasta (Rango mínimo) - Código Munsell',
            'slug' => Str::kebab('dect color pasta minimo codigo munsell'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Color Pasta (Rango mínimo) - Nombre Munsell',
            'slug' => Str::kebab('dect color pasta minimo nombre munsell'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Color Pasta (Rango máximo) - Código Munsell',
            'slug' => Str::kebab('dect color pasta maximo codigo munsell'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Color Pasta (Rango máximo) - Nombre Munsell',
            'slug' => Str::kebab('dect color pasta maximo nombre munsell'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Ambiente de cocción 1',
            'slug' => Str::kebab('dect ambiente coccion 1'),
            'lista' => config('constants.lista_valores.descripcion_tecnica.ambiente_coccion'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Ambiente de cocción 2',
            'slug' => Str::kebab('dect ambiente coccion 2'),
            'lista' => config('constants.lista_valores.descripcion_tecnica.ambiente_coccion'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Nubes de cocción o rastros de carbonización en la superficie',
            'slug' => Str::kebab('dect nubes coccion'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Observaciones descripción técnica',
            'slug' => Str::kebab('dect observaciones descripcion tecnica'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.descripcion_tecnica')
        ]);

        /*----------*/
        PiezaClaveCampos::create([
            'campo' => 'Composición inorganica (antiplástico)',
            'slug' => Str::kebab('pet composicion inorganica'),
            'lista' => config('constants.lista_valores.petrografia.composicion_inorganica'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Composición orgánica (antiplástico)',
            'slug' => Str::kebab('pet composicion organica'),
            'lista' => config('constants.lista_valores.petrografia.composicion_organica'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Forma de los granos (antiplástico)',
            'slug' => Str::kebab('pet forma de los granos'),
            'lista' => config('constants.lista_valores.petrografia.forma_granos'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Esfericidad de los granos (antiplástico)',
            'slug' => Str::kebab('pet esfericidad de los granos'),
            'lista' => config('constants.lista_valores.petrografia.esfericidad_granos'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Disposición (antiplástico)',
            'slug' => Str::kebab('pet disposicion'),
            'lista' => config('constants.lista_valores.petrografia.disposicion'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Ambiente de cocción',
            'slug' => Str::kebab('pet ambiente de coccion'),
            'lista' => config('constants.lista_valores.petrografia.ambiente_coccion'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.petrografia')
        ]);

        /*----------*/
        PiezaClaveCampos::create([
            'campo' => 'Composición de la pasta (DRX orientado)',
            'slug' => Str::kebab('ray composicion pasta'),
            'lista' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pasta'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.difracion_rayos_x')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Composición inorgánica segundo nivel',
            'slug' => Str::kebab('ray composicion inorganica'),
            'lista' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.difracion_rayos_x')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Composición pigmentos',
            'slug' => Str::kebab('ray composicion pigmentos'),
            'lista' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pigmentos'),
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.difracion_rayos_x')
        ]);

        /*-------*/
        PiezaClaveCampos::create([
            'campo' => 'Bibliografía',
            'slug' => Str::kebab('otros Bibliografía'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.otros')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Fotografías',
            'slug' => Str::kebab('otros Fotografías'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.otros')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Observaciones',
            'slug' => Str::kebab('otros Observaciones'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.otros')
        ]);
        PiezaClaveCampos::create([
            'campo' => 'Código interno',
            'slug' => Str::kebab('otros Código interno'),
            'textarea' => 1,
            'pieza_clave_categorias_id' => config('constants.pieza_clave_categorias.otros')
        ]);


    }
}
