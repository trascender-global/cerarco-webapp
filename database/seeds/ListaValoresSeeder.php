<?php

namespace Database\Seeders;

use App\Models\ListaValores;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ListaValoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints();
        DB::table('lista_valores')->truncate();


        // ----------- Datos generales ----------- //
        /**
         * Área geográfica
         */
        ListaValores::create([
            'valor'    => '(CC) Costa Caribe',
            'slug'     => Str::kebab('cc'),
            'lista_id' => config('constants.lista_valores.datos_generales.area_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(CP) Costa Pacífica',
            'slug'     => Str::kebab('cp'),
            'lista_id' => config('constants.lista_valores.datos_generales.area_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ZA) Zona Andina',
            'slug'     => Str::kebab('za'),
            'lista_id' => config('constants.lista_valores.datos_generales.area_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(OR) Orinoquía',
            'slug'     => Str::kebab('or'),
            'lista_id' => config('constants.lista_valores.datos_generales.area_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(AM) Amazonía',
            'slug'     => Str::kebab('am'),
            'lista_id' => config('constants.lista_valores.datos_generales.area_geografica')
        ]);

        /**
         * Subregión geográfica
         */
        ListaValores::create([
            'valor'    => '(arc) Archipiélago',
            'slug'     => Str::kebab('arc'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(gua) Península de La Guajira',
            'slug'     => Str::kebab('gua'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(sie) Sierra Nevada de Santa Marta',
            'slug'     => Str::kebab('sie'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(sab) Sabanas del Caribe',
            'slug'     => 'sab',
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(sin) Valles de los río Sinu y Alto San Jorge',
            'slug'     => Str::kebab('sin'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(mom) Depresión Momposina',
            'slug'     => Str::kebab('mom'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ura) Golfo de Urabá',
            'slug'     => Str::kebab('ura'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(nco) Sector norte de las estribaciones occidentales Cordillera Occidental (Oeste)',
            'slug'     => Str::kebab('nco'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(sco) Sector sur de las estribaciones occidentales de la Cordillera Occidental (Oeste)',
            'slug'     => Str::kebab('sco'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(bau) Serranía del Baudó',
            'slug'     => Str::kebab('bau'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(atr) Valles aluviales ríos Atrato y San Juan',
            'slug'     => Str::kebab('atr'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(pac) Llanura costera del Pacífico',
            'slug'     => Str::kebab('pac'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(isp) Islas y Cayos del Pacífico',
            'slug'     => Str::kebab('isp'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(pas) Nudo de los Pastos',
            'slug'     => Str::kebab('pas'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(pat) Fosa del Patía',
            'slug'     => Str::kebab('pat'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(noc) Sector nororiental de la Cordillera Occidental (Oeste)',
            'slug'     => Str::kebab('noc'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(pop) Altiplano de Popayán',
            'slug'     => Str::kebab('pop'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(cau) Valle del Cauca',
            'slug'     => Str::kebab('cau'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(cañ) Cañón del Cauca',
            'slug'     => Str::kebab('can'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(mac) Macizo Colombiano',
            'slug'     => Str::kebab('mac'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ccs) Cordillera Central meridional (Sur)',
            'slug'     => Str::kebab('ccs'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(mav) Macizo volcánico',
            'slug'     => Str::kebab('mav'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ant) Montaña Antioqueña',
            'slug'     => Str::kebab('ant'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(alm) Alto Magdalena',
            'slug'     => Str::kebab('alm'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(mam) Magdalena Medio',
            'slug'     => Str::kebab('mam'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(mce) Vertiente Magdalenense de la Cordillera Oriental (Este)',
            'slug'     => Str::kebab('mce'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(cbo) Altiplano Cundiboyacense',
            'slug'     => Str::kebab('cbo'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(san) Montaña Santandereana',
            'slug'     => Str::kebab('san'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(sua) Fosa de los ríos Suárez y Chicamocha',
            'slug'     => Str::kebab('sua'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(stu) Macizo de Santurbán',
            'slug'     => Str::kebab('stu'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(cat) Catatumbo',
            'slug'     => Str::kebab('cat'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(mot) Serranía de los Motilones',
            'slug'     => Str::kebab('mot'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(lce) Vertiente Llanera Cordillera Oriental (Este)',
            'slug'     => Str::kebab('lce'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ace) Vertiente Amazónica Cordillera Oriental (Este)',
            'slug'     => Str::kebab('ace'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(pie) Piedemonte Llanero',
            'slug'     => Str::kebab('pie'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(des) Llanuras de desborde del Piedemonte',
            'slug'     => Str::kebab('des'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(met) Llanuras del río Meta',
            'slug'     => Str::kebab('met'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ori) Llanuras del río Orinoco',
            'slug'     => Str::kebab('ori'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(mgu) Llanuras de los ríos Meta y Guaviare',
            'slug'     => Str::kebab('mgu'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ara) Pantanos del río Arauca',
            'slug'     => Str::kebab('ara'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(sma) Serranía de la Macarena',
            'slug'     => Str::kebab('sma'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(pia) Piedemonte Amazónico',
            'slug'     => Str::kebab('pia'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(caq) Llanuras altas y disectadas del río Caquetá',
            'slug'     => Str::kebab('caq'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ini) Llanuras de los ríos Guaviare - Inírida',
            'slug'     => Str::kebab('ini'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(put) Confluencia de la red andina en los ríos Putumayo y Caquetá',
            'slug'     => Str::kebab('put'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(pin) Penillanuras al sur de Puerto Inírida',
            'slug'     => Str::kebab('pin'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(yar) Llanuras entre los ríos Inírida - Yarí',
            'slug'     => Str::kebab('yar'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(ama) Amazonía meridional (Sur)',
            'slug'     => Str::kebab('ama'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(iga) Llanuras de los ríos Igara Paraná - Putumayo',
            'slug'     => Str::kebab('iga'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(apa) Confluencia de los ríos Apaporis - Caquetá',
            'slug'     => Str::kebab('apa'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(mis) Serranías y montes islas',
            'slug'     => Str::kebab('mis'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(gio) Llanuras de desborde confluencia Guaviare - Inírida en el río Orinoco',
            'slug'     => Str::kebab('gio'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);
        ListaValores::create([
            'valor'    => '(cym) Llanuras aluviales disectadas, terrazas de los ríos Caquetá, Yarí y Mirití - Paraná',
            'slug'     => Str::kebab('cym'),
            'lista_id' => config('constants.lista_valores.datos_generales.subregion_geografica')
        ]);

        /**
         * Departamento
         */
        ListaValores::create([
            'valor'    => 'Amazonas',
            'slug'     => Str::kebab('Amazonas'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Antioquia',
            'slug'     => Str::kebab('Antioquia'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Arauca',
            'slug'     => Str::kebab('Arauca'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Atlántico',
            'slug'     => Str::kebab('Atlantico'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Bolívar',
            'slug'     => Str::kebab('Bolivar'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Boyacá',
            'slug'     => Str::kebab('Boyaca'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Caldas',
            'slug'     => Str::kebab('Caldas'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Caquetá',
            'slug'     => Str::kebab('Caqueta'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Casanare',
            'slug'     => Str::kebab('Casanare'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Cauca',
            'slug'     => Str::kebab('Cauca'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Cesar',
            'slug'     => Str::kebab('Cesar'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Chocó',
            'slug'     => Str::kebab('Choco'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Córdoba',
            'slug'     => Str::kebab('Cerdoba'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Cundinamarca',
            'slug'     => Str::kebab('Cundinamarca'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Guainía',
            'slug'     => Str::kebab('Guainia'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Guaviare',
            'slug'     => Str::kebab('Guaviare'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Huila',
            'slug'     => Str::kebab('Huila'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'La Guajira',
            'slug'     => Str::kebab('La Guajira'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Magdalena',
            'slug'     => Str::kebab('Magdalena'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Meta',
            'slug'     => Str::kebab('Meta'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Nariño',
            'slug'     => Str::kebab('Narino'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Norte de Santander',
            'slug'     => Str::kebab('Norte de Santander'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Putumayo',
            'slug'     => Str::kebab('Putumayo'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Quindío',
            'slug'     => Str::kebab('Quindio'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Risaralda',
            'slug'     => Str::kebab('Risaralda'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'San Andrés y Providencia',
            'slug'     => Str::kebab('San Andres y Providencia'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Santander',
            'slug'     => Str::kebab('Santander'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Sucre',
            'slug'     => Str::kebab('Sucre'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Tolima',
            'slug'     => Str::kebab('Tolima'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Valle del Cauca',
            'slug'     => Str::kebab('Valle del Cauca'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Vaupés',
            'slug'     => Str::kebab('Vaupes'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);
        ListaValores::create([
            'valor'    => 'Vichada, Puerto Carreño',
            'slug'     => Str::kebab('Vichada Puerto Carreno'),
            'lista_id' => config('constants.lista_valores.datos_generales.departamento')
        ]);

        /**
         * Publicación - estado
         */
        ListaValores::create([
            'valor'    => 'Publicado',
            'slug'     => Str::kebab('Publicado'),
            'lista_id' => config('constants.lista_valores.datos_generales.publicacion_estado')
        ]);
        ListaValores::create([
            'valor'    => 'En discusión por la comunidad académica',
            'slug'     => Str::kebab('En discusion'),
            'lista_id' => config('constants.lista_valores.datos_generales.publicacion_estado')
        ]);
        ListaValores::create([
            'valor'    => 'En revisión CERARCO',
            'slug'     => Str::kebab('En revision'),
            'lista_id' => config('constants.lista_valores.datos_generales.publicacion_estado')
        ]);

        /**
         * Confiabilidad del Modelo
         */
        ListaValores::create([
            'valor'    => 'Baja',
            'slug'     => Str::kebab('Confiabilidad Baja'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_del_modelo')
        ]);
        ListaValores::create([
            'valor'    => 'Media',
            'slug'     => Str::kebab('Confiabilidad Media'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_del_modelo')
        ]);
        ListaValores::create([
            'valor'    => 'Alta',
            'slug'     => Str::kebab('Confiabilidad Alta'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_del_modelo')
        ]);

        /**
         * Confiabilidad modelo (o variante) Modelo conformado por piezas procedentes de:
         */
        ListaValores::create([
            'valor'    => '(1) Colección publica/privada sin referencia alguna',
            'slug'     => Str::kebab('Confiabilidad modelo-1'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(2) Colección publica/privada con referencia geográfica general (departamento)',
            'slug'     => Str::kebab('Confiabilidad modelo-2'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(3) Colección publica/privada con referencia geográfica específica (finca-sitio-municipio)',
            'slug'     => Str::kebab('Confiabilidad modelo-3'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(4) Colección publica/privada con referencia geográfica específica procedente de prospección arqueológica (recol. sup. o pozozs de sondeo)',
            'slug'     => Str::kebab('Confiabilidad modelo-4'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(5) Colección publica/privada con relación formal y decorativa con piezas o fragmentos excavados: cronología relativa - excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Confiabilidad modelo-5'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(6) Colección publica/privada con relación formal y decorativa con piezas o fragmentos excavados: cronología relativa - excavación por niveles arbitrarios con control estratigráfico y de los rasgos / excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Confiabilidad modelo-6'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(7) Colección publica/privada. Pieza excavada: cronología relativa - excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Confiabilidad modelo-7'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(8) Colección publica/privada. Pieza excavada: cronología relativa - excavación por niveles arbitrarios con control estratigráfico y de los rasgos / excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Confiabilidad modelo-8'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(9) Colección publica/privada con relación formal y decorativa con piezas o fragmentos excavados: cronología absoluta - excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Confiabilidad modelo-9'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(10) Colección publica/privada con relación formal y decorativa con piezas o fragmentos excavados: cronología absoluta - excavación por niveles arbitrarios con control estratigráfico y de los rasgos / excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Confiabilidad modelo-10'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(11) Colección publica/privada. Pieza excavada: cronología absoluta - excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Confiabilidad modelo-11'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);
        ListaValores::create([
            'valor'    => '(12) Colección publica/privada. Pieza excavada: cronología absoluta - excavación por niveles arbitrarios con control estratigráfico y de los rasgos / excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Confiabilidad modelo-12'),
            'lista_id' => config('constants.lista_valores.datos_generales.confiabilidad_modelo_procedentes')
        ]);

        /**
         * Integridad de la pieza
         */
        ListaValores::create([
            'valor'    => 'Fragmentos sin posibilidad de reconstrucción formal',
            'slug'     => Str::kebab('Integridad pieza sin posibilidad de reconstruccion formal'),
            'lista_id' => config('constants.lista_valores.datos_generales.integridad_de_la_pieza')
        ]);
        ListaValores::create([
            'valor'    => 'Fragmentos con posibilidad de reconstrucción formal',
            'slug'     => Str::kebab('Integridad pieza con posibilidad de reconstruccion formal'),
            'lista_id' => config('constants.lista_valores.datos_generales.integridad_de_la_pieza')
        ]);
        ListaValores::create([
            'valor'    => 'Piezas completas',
            'slug'     => Str::kebab('Integridad pieza Piezas completas'),
            'lista_id' => config('constants.lista_valores.datos_generales.integridad_de_la_pieza')
        ]);

        /**
         * Funcion Primaria
         */
        ListaValores::create([
            'valor'    => 'Procesamiento',
            'slug'     => Str::kebab('Funcion Primaria Procesamiento'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Almacenamiento',
            'slug'     => Str::kebab('Funcion Primaria Almacenamiento'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Servido',
            'slug'     => Str::kebab('Funcion Primaria Servido'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Transporte',
            'slug'     => Str::kebab('Funcion Primaria Transporte'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Cocción',
            'slug'     => Str::kebab('Funcion Primaria Coccion'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Ornamental',
            'slug'     => Str::kebab('Funcion Primaria Ornamental'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Instrumento Musical',
            'slug'     => Str::kebab('Funcion Primaria Instrumento Musical'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Funerario',
            'slug'     => Str::kebab('Funcion Primaria Funerario'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Lúdico',
            'slug'     => Str::kebab('Funcion Primaria Ludico'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Herramienta/Instrumento',
            'slug'     => Str::kebab('Funcion Primaria Herramienta Instrumento'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Funcion Primaria Otro'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);
        ListaValores::create([
            'valor'    => 'No Identificado',
            'slug'     => Str::kebab('Funcion Primaria No Identificado'),
            'lista_id' => config('constants.lista_valores.datos_generales.funcion_primaria')
        ]);

        /**
         * Contexto
         */
        ListaValores::create([
            'valor'    => 'Doméstico',
            'slug'     => Str::kebab('Contexto Domestico'),
            'lista_id' => config('constants.lista_valores.datos_generales.contexto')
        ]);
        ListaValores::create([
            'valor'    => 'Basurero',
            'slug'     => Str::kebab('Contexto Basurero'),
            'lista_id' => config('constants.lista_valores.datos_generales.contexto')
        ]);
        ListaValores::create([
            'valor'    => 'Público',
            'slug'     => Str::kebab('Contexto Publico'),
            'lista_id' => config('constants.lista_valores.datos_generales.contexto')
        ]);
        ListaValores::create([
            'valor'    => 'Ritual-Ceremonial',
            'slug'     => Str::kebab('Contexto Ritual Ceremonial'),
            'lista_id' => config('constants.lista_valores.datos_generales.contexto')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Contexto Sin informacion'),
            'lista_id' => config('constants.lista_valores.datos_generales.contexto')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Contexto Otro'),
            'lista_id' => config('constants.lista_valores.datos_generales.contexto')
        ]);

        // ----------- Cronología del modelo ----------- //
        /**
         * a.C - d.C
         */
        ListaValores::create([
            'valor'    => 'a.C.',
            'slug'     => Str::kebab('a.C - d.C a.C.'),
            'lista_id' => config('constants.lista_valores.cronologia_del_modelo.ac_dc')
        ]);
        ListaValores::create([
            'valor'    => 'd.C.',
            'slug'     => Str::kebab('a.C - d.C d.C.'),
            'lista_id' => config('constants.lista_valores.cronologia_del_modelo.ac_dc')
        ]);
        /**
         * Método de datación
         */
        ListaValores::create([
            'valor'    => 'Dendrocronología',
            'slug'     => Str::kebab('Metodo Datacion Dendrocronologia'),
            'lista_id' => config('constants.lista_valores.cronologia_del_modelo.metodo_de_datacion')
        ]);
        ListaValores::create([
            'valor'    => 'Radio carbono calibrado',
            'slug'     => Str::kebab('Metodo Datacion Radio carbono calibrado'),
            'lista_id' => config('constants.lista_valores.cronologia_del_modelo.metodo_de_datacion')
        ]);
        ListaValores::create([
            'valor'    => 'Radio carbono no calibrado',
            'slug'     => Str::kebab('Metodo Datacion Radio carbono no calibrado'),
            'lista_id' => config('constants.lista_valores.cronologia_del_modelo.metodo_de_datacion')
        ]);
        ListaValores::create([
            'valor'    => 'Termoluminiscencia',
            'slug'     => Str::kebab('Metodo Datacion Termoluminiscencia'),
            'lista_id' => config('constants.lista_valores.cronologia_del_modelo.metodo_de_datacion')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Metodo Datacion No aplica'),
            'lista_id' => config('constants.lista_valores.cronologia_del_modelo.metodo_de_datacion')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Metodo Datacion Otro'),
            'lista_id' => config('constants.lista_valores.cronologia_del_modelo.metodo_de_datacion')
        ]);

        // ----------- Descripción formal ----------- //
        /**
         * Forma Base
         */
        ListaValores::create([
            'valor'    => 'Alcarraza',
            'slug'     => Str::kebab('Forma Base Alcarraza'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Ánfora',
            'slug'     => Str::kebab('Forma Base Ánfora'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Bandeja',
            'slug'     => Str::kebab('Forma Base Bandeja'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Barril',
            'slug'     => Str::kebab('Forma Base Barril'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Botella',
            'slug'     => Str::kebab('Forma Base Botella'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Budare',
            'slug'     => Str::kebab('Forma Base Budare'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Caja',
            'slug'     => Str::kebab('Forma Base Caja'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Cántaro',
            'slug'     => Str::kebab('Forma Base Cantaro'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Cazuela',
            'slug'     => Str::kebab('Forma Base Cazuela'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Colador',
            'slug'     => Str::kebab('Forma Base Colador'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Copa',
            'slug'     => Str::kebab('Forma Base Copa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Crisol',
            'slug'     => Str::kebab('Forma Base Crisol'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Cuchara',
            'slug'     => Str::kebab('Forma Base Cuchara'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Cuenco',
            'slug'     => Str::kebab('Forma Base Cuenco'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Cuenta',
            'slug'     => Str::kebab('Forma Base Cuenta'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Figurilla',
            'slug'     => Str::kebab('Forma Base Figurilla'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Gacha',
            'slug'     => Str::kebab('Forma Base Gacha'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Intrumento musical',
            'slug'     => Str::kebab('Forma Base Intrumento musical'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Jarra',
            'slug'     => Str::kebab('Forma Base Jarra'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Máscara',
            'slug'     => Str::kebab('Forma Base Mascara'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Miniatura',
            'slug'     => Str::kebab('Forma Base Miniatura'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Mocasín',
            'slug'     => Str::kebab('Forma Base Mocasin'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Molde',
            'slug'     => Str::kebab('Forma Base Molde'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Múcura',
            'slug'     => Str::kebab('Forma Base Mucura'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Olla',
            'slug'     => Str::kebab('Forma Base Olla'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Placa',
            'slug'     => Str::kebab('Forma Base Placa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Plato',
            'slug'     => Str::kebab('Forma Base Plato'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Poporo',
            'slug'     => Str::kebab('Forma Base Poporo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Rallador',
            'slug'     => Str::kebab('Forma Base Rallador'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Retablo',
            'slug'     => Str::kebab('Forma Base Retablo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Rodillo',
            'slug'     => Str::kebab('Forma Base Rodillo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Sello',
            'slug'     => Str::kebab('Forma Base Sello'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Tapa',
            'slug'     => Str::kebab('Forma Base Tapa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Tecomate',
            'slug'     => Str::kebab('Forma Base Tecomate'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Urna',
            'slug'     => Str::kebab('Forma Base Urna'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Vaso',
            'slug'     => Str::kebab('Forma Base Vaso'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);
        ListaValores::create([
            'valor'    => 'Volante de Huso',
            'slug'     => Str::kebab('Forma Base Volante de Huso'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.forma-base')
        ]);

        /**
         * Boca
         */
        ListaValores::create([
            'valor'    => 'Asimétrica',
            'slug'     => Str::kebab('Boca Asimetrica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'Circular',
            'slug'     => Str::kebab('Boca Circular'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'Cuadrada',
            'slug'     => Str::kebab('Boca Cuadrada'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'Doble',
            'slug'     => Str::kebab('Boca Doble'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'Elíptica',
            'slug'     => Str::kebab('Boca Eliptica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'Ovoidal',
            'slug'     => Str::kebab('Boca Ovoidal'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'Rectangular',
            'slug'     => Str::kebab('Boca Rectangular'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'Romboidal',
            'slug'     => Str::kebab('Boca Romboidal'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'Otra',
            'slug'     => Str::kebab('Boca Otra'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Boca No aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.boca')
        ]);

        /**
         * Borde
         */
        ListaValores::create([
            'valor'    => 'Evertido',
            'slug'     => Str::kebab('Borde Evertido'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.borde')
        ]);
        ListaValores::create([
            'valor'    => 'Invertido',
            'slug'     => Str::kebab('Borde Invertido'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.borde')
        ]);
        ListaValores::create([
            'valor'    => 'Recto',
            'slug'     => Str::kebab('Borde Recto'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.borde')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Borde No aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.borde')
        ]);

        /**
         * Labio
         */
        ListaValores::create([
            'valor'    => 'Biselado al exterior',
            'slug'     => Str::kebab('Labio Biselado exterior'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);
        ListaValores::create([
            'valor'    => 'Biselado al interior',
            'slug'     => Str::kebab('Labio Biselado interior'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);
        ListaValores::create([
            'valor'    => 'Cóncavo',
            'slug'     => Str::kebab('Labio Concavo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);
        ListaValores::create([
            'valor'    => 'Convexo',
            'slug'     => Str::kebab('Labio Convexo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);
        ListaValores::create([
            'valor'    => 'Plano',
            'slug'     => Str::kebab('Labio Plano'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);
        ListaValores::create([
            'valor'    => 'Redondeado',
            'slug'     => Str::kebab('Labio Redondeado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);
        ListaValores::create([
            'valor'    => 'Reforzado al interior',
            'slug'     => Str::kebab('Labio Reforzado interior'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);
        ListaValores::create([
            'valor'    => 'Reforzado al exterior',
            'slug'     => Str::kebab('Labio Reforzado exterior'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Labio No aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.labio')
        ]);

        /**
         * Cuello
         */
        ListaValores::create([
            'valor'    => 'cóncavo-recto',
            'slug'     => Str::kebab('Cuello concavo-recto'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'cóncavo-redondeado',
            'slug'     => Str::kebab('Cuello concavo-redondeado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'convexo-recto',
            'slug'     => Str::kebab('Cuello convexo-recto'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'convexo-redondeado',
            'slug'     => Str::kebab('Cuello convexo-redondeado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'oblicuo-recto-abierto',
            'slug'     => Str::kebab('Cuello oblicuo-recto-abierto'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'oblicuo-recto-cerrado',
            'slug'     => Str::kebab('Cuello oblicuo-recto-cerrado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'oblicuo-redondeado-abierto',
            'slug'     => Str::kebab('Cuello oblicuo-redondeado-abierto'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'oblicuo-redondeado-cerrado',
            'slug'     => Str::kebab('Cuello oblicuo-redondeado-cerrado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'Recto',
            'slug'     => Str::kebab('Cuello Recto'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Cuello Otro'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Cuello No Aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuello')
        ]);

        /**
         * Hombro
         */
        ListaValores::create([
            'valor'    => 'Recto',
            'slug'     => Str::kebab('Hombro Recto'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.hombro')
        ]);
        ListaValores::create([
            'valor'    => 'Curvo',
            'slug'     => Str::kebab('Hombro Curvo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.hombro')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Hombro No Aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.hombro')
        ]);

        /**
         * Cuerpo
         */
        ListaValores::create([
            'valor'    => 'Antropomorfo',
            'slug'     => Str::kebab('Cuerpo Antropomorfo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Cilíndrico',
            'slug'     => Str::kebab('Cuerpo Cilindrico'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Cónico',
            'slug'     => Str::kebab('Cuerpo Conico'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Elipsoide',
            'slug'     => Str::kebab('Cuerpo Elipsoide'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Esférico',
            'slug'     => Str::kebab('Cuerpo Esferico'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Fitomorfo',
            'slug'     => Str::kebab('Cuerpo Fitomorfo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Hipérbole',
            'slug'     => Str::kebab('Cuerpo Hiperbole'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Oval',
            'slug'     => Str::kebab('Cuerpo Oval'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Rectangular',
            'slug'     => Str::kebab('Cuerpo Rectangular'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Zapatiforme',
            'slug'     => Str::kebab('Cuerpo Zapatiforme'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Zoomorfo',
            'slug'     => Str::kebab('Cuerpo Zoomorfo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Cuerpo Otro'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);
        ListaValores::create([
            'valor'    => 'No Aplica',
            'slug'     => Str::kebab('Cuerpo No Aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.cuerpo')
        ]);

        /**
         * Fondo
         */
        ListaValores::create([
            'valor'    => 'Cóncavo',
            'slug'     => Str::kebab('Fondo Concavo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.fondo')
        ]);
        ListaValores::create([
            'valor'    => 'Convexo',
            'slug'     => Str::kebab('Fondo Convexo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.fondo')
        ]);
        ListaValores::create([
            'valor'    => 'Plano',
            'slug'     => Str::kebab('Fondo Plano'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.fondo')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Fondo No Aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.fondo')
        ]);

        /**
         * Base
         */
        ListaValores::create([
            'valor'    => 'Con soporte o pedestal',
            'slug'     => Str::kebab('Base Con soporte o pedestal'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.base')
        ]);
        ListaValores::create([
            'valor'    => 'Cóncava',
            'slug'     => Str::kebab('Base Concava'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.base')
        ]);
        ListaValores::create([
            'valor'    => 'Convexa',
            'slug'     => Str::kebab('Base Convexa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.base')
        ]);
        ListaValores::create([
            'valor'    => 'Plana',
            'slug'     => Str::kebab('Base Plana'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.base')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Base No Aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.base')
        ]);

        /**
         * Soporte
         */
        ListaValores::create([
            'valor'    => 'Anular',
            'slug'     => Str::kebab('Soporte Anular'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Argolla',
            'slug'     => Str::kebab('Soporte Argolla'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Calado',
            'slug'     => Str::kebab('Soporte Calado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Cilíndrico',
            'slug'     => Str::kebab('Soporte Cilindrico'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Cónico',
            'slug'     => Str::kebab('Soporte Conico'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Cono truncado',
            'slug'     => Str::kebab('Soporte Cono truncado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Cuadrado',
            'slug'     => Str::kebab('Soporte Cuadrado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Elipsoide',
            'slug'     => Str::kebab('Soporte Elipsoide'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Hiperboloide',
            'slug'     => Str::kebab('Soporte Hiperboloide'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Hiperboloide truncado',
            'slug'     => Str::kebab('Soporte Hiperboloide truncado'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Mamiforme',
            'slug'     => Str::kebab('Soporte Mamiforme'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Pedestal',
            'slug'     => Str::kebab('Soporte Pedestal'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Rectangular',
            'slug'     => Str::kebab('Soporte Rectangular'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Semiesférico',
            'slug'     => Str::kebab('Soporte Semiesferico'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Tetrápode',
            'slug'     => Str::kebab('Soporte Tetrapode'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Trípode',
            'slug'     => Str::kebab('Soporte Tripode'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Soporte Otro'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Soporte No aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.soporte')
        ]);

        /**
         * Asa
         */
        ListaValores::create([
            'valor'    => 'Argolla',
            'slug'     => Str::kebab('Asa Argolla'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);
        ListaValores::create([
            'valor'    => 'Bifurcada',
            'slug'     => Str::kebab('Asa Bifurcada'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);
        ListaValores::create([
            'valor'    => 'De Canasta',
            'slug'     => Str::kebab('Asa De Canasta'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);
        ListaValores::create([
            'valor'    => 'De Puente',
            'slug'     => Str::kebab('Asa De Puente'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);
        ListaValores::create([
            'valor'    => 'De Puente recto',
            'slug'     => Str::kebab('Asa De Puente recto'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);
        ListaValores::create([
            'valor'    => 'Recta',
            'slug'     => Str::kebab('Asa Recta'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);
        ListaValores::create([
            'valor'    => 'Rollos',
            'slug'     => Str::kebab('Asa Rollos'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);
        ListaValores::create([
            'valor'    => 'Trenzada',
            'slug'     => Str::kebab('Asa Trenzada'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);
        ListaValores::create([
            'valor'    => 'Triangular',
            'slug'     => Str::kebab('Asa Triangular'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.asa')
        ]);

        /**
         * Agarradera
         */
        ListaValores::create([
            'valor'    => 'Antropomorfa',
            'slug'     => Str::kebab('Agarradera Antropomorfa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.agarradera')
        ]);
        ListaValores::create([
            'valor'    => 'Botón',
            'slug'     => Str::kebab('Agarradera Boton'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.agarradera')
        ]);
        ListaValores::create([
            'valor'    => 'Fitomorfa',
            'slug'     => Str::kebab('Agarradera Fitomorfa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.agarradera')
        ]);
        ListaValores::create([
            'valor'    => 'Mango',
            'slug'     => Str::kebab('Agarradera Mango'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.agarradera')
        ]);
        ListaValores::create([
            'valor'    => 'Zoomorfa',
            'slug'     => Str::kebab('Agarradera Zoomorfa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.agarradera')
        ]);
        ListaValores::create([
            'valor'    => 'Otra',
            'slug'     => Str::kebab('Agarradera Otra'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.agarradera')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Agarradera No aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.agarradera')
        ]);

        /**
         * Mango
         */
        ListaValores::create([
            'valor'    => 'Antropomorfo',
            'slug'     => Str::kebab('Mango Antropomorfo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);
        ListaValores::create([
            'valor'    => 'Cilíndrico',
            'slug'     => Str::kebab('Mango Cilindrico'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);
        ListaValores::create([
            'valor'    => 'Cónico',
            'slug'     => Str::kebab('Mango Conico'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);
        ListaValores::create([
            'valor'    => 'Fitomorfo',
            'slug'     => Str::kebab('Mango Fitomorfo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);
        ListaValores::create([
            'valor'    => 'Rectangular',
            'slug'     => Str::kebab('Mango Rectangular'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);
        ListaValores::create([
            'valor'    => 'Tubular',
            'slug'     => Str::kebab('Mango Tubular'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);
        ListaValores::create([
            'valor'    => 'Zoomorfo',
            'slug'     => Str::kebab('Mango Zoomorfo'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Mango Otro'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);
        ListaValores::create([
            'valor'    => 'No Aplica',
            'slug'     => Str::kebab('Mango No Aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.mango')
        ]);

        /**
         * Vertedera
         */
        ListaValores::create([
            'valor'    => 'Abierta',
            'slug'     => Str::kebab('Vertedera Abierta'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.vertedera')
        ]);
        ListaValores::create([
            'valor'    => 'Cerradas',
            'slug'     => Str::kebab('Vertedera Cerradas'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.vertedera')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Vertedera No aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.vertedera')
        ]);

        /**
         * Caras
         */
        ListaValores::create([
            'valor'    => '1',
            'slug'     => Str::kebab('Caras-1'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.caras')
        ]);
        ListaValores::create([
            'valor'    => '2',
            'slug'     => Str::kebab('Caras-2'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.caras')
        ]);
        ListaValores::create([
            'valor'    => '3',
            'slug'     => Str::kebab('Caras-3'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.caras')
        ]);
        ListaValores::create([
            'valor'    => '4',
            'slug'     => Str::kebab('Caras-4'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.caras')
        ]);
        ListaValores::create([
            'valor'    => 'Más de 4',
            'slug'     => Str::kebab('Caras Mas de 4'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.caras')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Caras No aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.caras')
        ]);

        /**
         * Tipo de Figurina
         */
        ListaValores::create([
            'valor'    => 'Antropomorfa',
            'slug'     => Str::kebab('Tipo Figurina Antropomorfa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_figurina')
        ]);
        ListaValores::create([
            'valor'    => 'Fitomorfa',
            'slug'     => Str::kebab('Tipo Figurina Fitomorfa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_figurina')
        ]);
        ListaValores::create([
            'valor'    => 'Zoomorfa',
            'slug'     => Str::kebab('Tipo Figurina Zoomorfa'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_figurina')
        ]);
        ListaValores::create([
            'valor'    => 'Otra',
            'slug'     => Str::kebab('Tipo Figurina Otra'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_figurina')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Tipo Figurina No aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_figurina')
        ]);

        /**
         * Tipo de Instrumento
         */
        ListaValores::create([
            'valor'    => 'Aerófono',
            'slug'     => Str::kebab('Tipo Instrumento Aerofono'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_instrumento')
        ]);
        ListaValores::create([
            'valor'    => 'Cordófonos',
            'slug'     => Str::kebab('Tipo Instrumento Cordofonos'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_instrumento')
        ]);
        ListaValores::create([
            'valor'    => 'Idiófonos/sonaja',
            'slug'     => Str::kebab('Tipo Instrumento Idiofonos sonaja'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_instrumento')
        ]);
        ListaValores::create([
            'valor'    => 'Membranófonos',
            'slug'     => Str::kebab('Tipo Instrumento Membranofonos'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_instrumento')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Tipo Instrumento No Aplica'),
            'lista_id' => config('constants.lista_valores.descripcion_formal.tipo_de_instrumento')
        ]);

        // ----------- Decoraciones ----------- //
        /**
         * Decoración
         */
        ListaValores::create([
            'valor'    => 'Ahumado',
            'slug'     => Str::kebab('Decoracion Ahumado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Aplicación',
            'slug'     => Str::kebab('Decoracion Aplicacion'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Baño o engobe',
            'slug'     => Str::kebab('Decoracion Bano o engobe'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Bruñido',
            'slug'     => Str::kebab('Decoracion Brunido'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Calado',
            'slug'     => Str::kebab('Decoracion Calado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Esgrafiado',
            'slug'     => Str::kebab('Decoracion Esgrafiado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Estampado',
            'slug'     => Str::kebab('Decoracion Estampado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Excisión',
            'slug'     => Str::kebab('Decoracion Excision'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Impresión con cestería',
            'slug'     => Str::kebab('Decoracion Impresion con cesteria'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Impresión con dedo',
            'slug'     => Str::kebab('Decoracion Impresion con dedo'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Impresión con hojas',
            'slug'     => Str::kebab('Decoracion Impresion con hojas'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Impresión con instrumento',
            'slug'     => Str::kebab('Decoracion Impresion con instrumento'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Incisión',
            'slug'     => Str::kebab('Decoracion Incision'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Perforado',
            'slug'     => Str::kebab('Decoracion Perforado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Pintura negativa',
            'slug'     => Str::kebab('Decoracion Pintura negativa'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Pintura positiva',
            'slug'     => Str::kebab('Decoracion Pintura positiva'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Sin decoración',
            'slug'     => Str::kebab('Decoracion Sin decoracion'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Ungulado',
            'slug'     => Str::kebab('Decoracion Ungulado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Otra',
            'slug'     => Str::kebab('Decoracion Otra'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Decoracion No aplica'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);
        ListaValores::create([
            'valor'    => 'Modelado',
            'slug'     => Str::kebab('Decoracion Modelado'),
            'lista_id' => config('constants.lista_valores.decoraciones.decoracion')
        ]);

        /**
         * Tratamiento de la superficie
         */
        ListaValores::create([
            'valor'    => 'Ahumado',
            'slug'     => Str::kebab('Tratamiento superficie Ahumado'),
            'lista_id' => config('constants.lista_valores.decoraciones.tratamiento_superficie')
        ]);
        ListaValores::create([
            'valor'    => 'Baño',
            'slug'     => Str::kebab('Tratamiento superficie Bano'),
            'lista_id' => config('constants.lista_valores.decoraciones.tratamiento_superficie')
        ]);
        ListaValores::create([
            'valor'    => 'Engobe',
            'slug'     => Str::kebab('Tratamiento superficie Engobe'),
            'lista_id' => config('constants.lista_valores.decoraciones.tratamiento_superficie')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Tratamieto Superficie Otro'),
            'lista_id' => config('constants.lista_valores.decoraciones.tratamiento_superficie')
        ]);

        /**
         * Localización dentro de la forma
         */
        ListaValores::create([
            'valor'    => 'Asa',
            'slug'     => Str::kebab('Localizacion dentro de forma Asa'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Base',
            'slug'     => Str::kebab('Localizacion dentro de forma Base'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Borde',
            'slug'     => Str::kebab('Localizacion dentro de forma Borde'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Cuello',
            'slug'     => Str::kebab('Localizacion dentro de forma Cuello'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Cuerpo',
            'slug'     => Str::kebab('Localizacion dentro de forma Cuerpo'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Hombro',
            'slug'     => Str::kebab('Localizacion dentro de forma Hombro'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Mango',
            'slug'     => Str::kebab('Localizacion dentro de forma Mango'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Soporte',
            'slug'     => Str::kebab('Localizacion dentro de forma Soporte'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Toda la Pieza',
            'slug'     => Str::kebab('Localizacion dentro de forma Toda la Pieza'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Vertedera',
            'slug'     => Str::kebab('Localizacion dentro de forma Vertedera'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Localizacion dentro de forma Otro'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'No aplica',
            'slug'     => Str::kebab('Localizacion dentro de forma No aplica'),
            'lista_id' => config('constants.lista_valores.decoraciones.localizacion_dentro_forma')
        ]);

        // ----------- Descripción técnica ----------- //
        /**
         * Acabado de la superficie
         */
        ListaValores::create([
            'valor'    => 'Áspero',
            'slug'     => Str::kebab('Acabado Superficie Aspero'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.acabado_superficie')
        ]);
        ListaValores::create([
            'valor'    => 'Burdo',
            'slug'     => Str::kebab('Acabado Superficie Burdo'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.acabado_superficie')
        ]);
        ListaValores::create([
            'valor'    => 'Liso',
            'slug'     => Str::kebab('Acabado Superficie Liso'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.acabado_superficie')
        ]);
        ListaValores::create([
            'valor'    => 'Pulido',
            'slug'     => Str::kebab('Acabado Superficie Pulido'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.acabado_superficie')
        ]);
        ListaValores::create([
            'valor'    => 'No se puede identificar',
            'slug'     => Str::kebab('Acabado Superficie No se puede identificar'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.acabado_superficie')
        ]);

        /**
         * Textura
         */
        ListaValores::create([
            'valor'    => 'Compacta',
            'slug'     => Str::kebab('Textura Compacta'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.textura')
        ]);
        ListaValores::create([
            'valor'    => 'Granular',
            'slug'     => Str::kebab('Textura Granular'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.textura')
        ]);
        ListaValores::create([
            'valor'    => 'Laminar',
            'slug'     => Str::kebab('Textura Laminar'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.textura')
        ]);
        ListaValores::create([
            'valor'    => 'Porosa',
            'slug'     => Str::kebab('Textura Porosa'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.textura')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Textura Otro'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.textura')
        ]);
        ListaValores::create([
            'valor'    => 'No se puede identificar',
            'slug'     => Str::kebab('Textura No se puede identificar'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.textura')
        ]);

        /**
         * Granulometría
         */
        ListaValores::create([
            'valor'    => 'Muy finos (0,05 a 0,1 mm)',
            'slug'     => Str::kebab('Granulometria Muy finos'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.granulometria')
        ]);
        ListaValores::create([
            'valor'    => 'Finos (0,1 a 0,25 mm)',
            'slug'     => Str::kebab('Granulometria Finos'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.granulometria')
        ]);
        ListaValores::create([
            'valor'    => 'Medianos (0,25 a 0,50 mm)',
            'slug'     => Str::kebab('Granulometria Medianos'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.granulometria')
        ]);
        ListaValores::create([
            'valor'    => 'Gruesos (superior a 0,50 mm)',
            'slug'     => Str::kebab('Granulometria Gruesos'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.granulometria')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Granulometria Otro'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.granulometria')
        ]);

        /**
         * Ambiente de cocción
         */
        ListaValores::create([
            'valor'    => 'Atmósfera Reductora',
            'slug'     => Str::kebab('Ambiente coccion Atmosfera Reductora'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.ambiente_coccion')
        ]);
        ListaValores::create([
            'valor'    => 'Atmósfera Oxidante',
            'slug'     => Str::kebab('Ambiente coccion Atmosfera Oxidante'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.ambiente_coccion')
        ]);
        ListaValores::create([
            'valor'    => 'Sin identificar',
            'slug'     => Str::kebab('Ambiente coccion Sin identificar'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.ambiente_coccion')
        ]);

        /**
         * Técnica de manufactura
         */
        ListaValores::create([
            'valor'    => 'Modelado',
            'slug'     => Str::kebab('Tecnica de manufactura Modelado'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.tecnica_manufactura')
        ]);
        ListaValores::create([
            'valor'    => 'Moldeado',
            'slug'     => Str::kebab('Tecnica de manufactura Moldeado'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.tecnica_manufactura')
        ]);
        ListaValores::create([
            'valor'    => 'Enrollado',
            'slug'     => Str::kebab('Tecnica de manufactura Enrollado'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.tecnica_manufactura')
        ]);
        ListaValores::create([
            'valor'    => 'Union de partes',
            'slug'     => Str::kebab('Tecnica de manufactura Union de partes'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.tecnica_manufactura')
        ]);
        ListaValores::create([
            'valor'    => 'Torno',
            'slug'     => Str::kebab('Tecnica de manufactura Torno'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.tecnica_manufactura')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Tecnica de manufactura Sin informacion'),
            'lista_id' => config('constants.lista_valores.descripcion_tecnica.tecnica_manufactura')
        ]);

        // ----------- Descripción (fragmento) ----------- //
        /**
         * Confiabilidad de la reconstrucción
         */
        ListaValores::create([
            'valor'    => '(1) No es posible reconstruir la inclinación exacta de la forma',
            'slug'     => Str::kebab('Confiabilidad no es posible reconstruir'),
            'lista_id' => config('constants.lista_valores.descripcion_fragmento.confiabilidad_reconstruccion')
        ]);
        ListaValores::create([
            'valor'    => '(2) La forma se logra reconstruir por comparación con otras vasijas',
            'slug'     => Str::kebab('Confiabilidad se logra reconstruir por comparacion'),
            'lista_id' => config('constants.lista_valores.descripcion_fragmento.confiabilidad_reconstruccion')
        ]);
        ListaValores::create([
            'valor'    => '(3) Se puede reconstruir la forma porque el fragmento es suficientemente amplio y descriptivo',
            'slug'     => Str::kebab('Confiabilidad Se puede reconstruir la forma'),
            'lista_id' => config('constants.lista_valores.descripcion_fragmento.confiabilidad_reconstruccion')
        ]);

        // ----------- Petrografia ----------- //
        /**
         * Composición inorganica (antiplástico)
         */
        ListaValores::create([
            'valor'    => 'Anfibol',
            'slug'     => Str::kebab('Composicion inorganica Anfibol'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Cuarzo',
            'slug'     => Str::kebab('Composicion inorganica Cuarzo'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Feldespato alcalino',
            'slug'     => Str::kebab('Composicion inorganica Feldespato alcalino'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Magnetita',
            'slug'     => Str::kebab('Composicion inorganica Magnetita'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Olivino',
            'slug'     => Str::kebab('Composicion inorganica Olivino'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Ópalo',
            'slug'     => Str::kebab('Composicion inorganica Opalo'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Piroxeno',
            'slug'     => Str::kebab('Composicion inorganica Piroxeno'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Plagioclasa',
            'slug'     => Str::kebab('Composicion inorganica Plagioclasa'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Roca ígnea piroclástica',
            'slug'     => Str::kebab('Composicion inorganica Roca ignea piroclastica'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Roca ígnea plutónica',
            'slug'     => Str::kebab('Composicion inorganica Roca ignea plutonica'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Roca ígnea volcánica',
            'slug'     => Str::kebab('Composicion inorganica Roca ignea volcanica'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Roca metamórfica de contacto',
            'slug'     => Str::kebab('Composicion inorganica Roca metamorfica contacto'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Roca sedimentaria terrígena',
            'slug'     => Str::kebab('Composicion inorganica Roca sedimentaria terrigena'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Roca metamórfica regional',
            'slug'     => Str::kebab('Composicion inorganica Roca metamorfica regional'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Roca sedimentaria organógena',
            'slug'     => Str::kebab('Composicion inorganica Roca sedimentaria organogena'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Roca sedimentaria química',
            'slug'     => Str::kebab('Composicion inorganica Roca sedimentaria quimica'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Zircón',
            'slug'     => Str::kebab('Composicion inorganica Zircon'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Composicion inorganica Otro'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Composicion inorganica Sin informacion'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_inorganica')
        ]);

        /**
         * Composición orgánica (antiplástico)
         */

        ListaValores::create([
            'valor'    => 'Concha',
            'slug'     => Str::kebab('Composicion organica Concha'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_organica')
        ]);
        ListaValores::create([
            'valor'    => 'Pelo de animal',
            'slug'     => Str::kebab('Composicion organica Pelo de animal'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_organica')
        ]);
        ListaValores::create([
            'valor'    => 'Vegetales',
            'slug'     => Str::kebab('Composicion organica Vegetales'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_organica')
        ]);
        ListaValores::create([
            'valor'    => 'Sin materia orgánica',
            'slug'     => Str::kebab('Composicion organica Sin materia organica'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_organica')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Composicion organica Sin informacion'),
            'lista_id' => config('constants.lista_valores.petrografia.composicion_organica')
        ]);

        /**
         * Forma de los granos (antiplástico)
         */
        ListaValores::create([
            'valor'    => 'Angular',
            'slug'     => Str::kebab('Forma granos Angular'),
            'lista_id' => config('constants.lista_valores.petrografia.forma_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Redondeada',
            'slug'     => Str::kebab('Forma granos Redondeada'),
            'lista_id' => config('constants.lista_valores.petrografia.forma_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Subredondeada',
            'slug'     => Str::kebab('Forma granos Subredondeada'),
            'lista_id' => config('constants.lista_valores.petrografia.forma_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Subangular',
            'slug'     => Str::kebab('Forma granos Subangular'),
            'lista_id' => config('constants.lista_valores.petrografia.forma_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Forma granos Sin informacion'),
            'lista_id' => config('constants.lista_valores.petrografia.forma_granos')
        ]);

        /**
         * Esfericidad de los granos (antiplástico)
         */
        ListaValores::create([
            'valor'    => 'Elongados',
            'slug'     => Str::kebab('Esfericidad granos Elongados'),
            'lista_id' => config('constants.lista_valores.petrografia.esfericidad_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Esféricos',
            'slug'     => Str::kebab('Esfericidad granos Esfericos'),
            'lista_id' => config('constants.lista_valores.petrografia.esfericidad_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Subelongados',
            'slug'     => Str::kebab('Esfericidad granos Subelongados'),
            'lista_id' => config('constants.lista_valores.petrografia.esfericidad_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Subesféricos',
            'slug'     => Str::kebab('Esfericidad granos Subesfericos'),
            'lista_id' => config('constants.lista_valores.petrografia.esfericidad_granos')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Esfericidad granos Sin informacion'),
            'lista_id' => config('constants.lista_valores.petrografia.esfericidad_granos')
        ]);

        /**
         * Disposición (antiplástico)
         */
        ListaValores::create([
            'valor'    => 'Con orientación',
            'slug'     => Str::kebab('Disposicion Con orientacion'),
            'lista_id' => config('constants.lista_valores.petrografia.disposicion')
        ]);
        ListaValores::create([
            'valor'    => 'Sin orientación',
            'slug'     => Str::kebab('Disposicion Sin orientacion'),
            'lista_id' => config('constants.lista_valores.petrografia.disposicion')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Disposicion Sin informacion'),
            'lista_id' => config('constants.lista_valores.petrografia.disposicion')
        ]);

        /**
         * Superficie interna
         */
        ListaValores::create([
            'valor'    => 'Alisado',
            'slug'     => Str::kebab('Superficie interna Alisado'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_interna')
        ]);
        ListaValores::create([
            'valor'    => 'Baño',
            'slug'     => Str::kebab('Superficie interna Bano'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_interna')
        ]);
        ListaValores::create([
            'valor'    => 'Engobe',
            'slug'     => Str::kebab('Superficie interna Engobe'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_interna')
        ]);
        ListaValores::create([
            'valor'    => 'Sin tratamiento',
            'slug'     => Str::kebab('Superficie interna Sin tratamiento'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_interna')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Superficie interna Sin informacion'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_interna')
        ]);

        /**
         * Superficie externa
         */
        ListaValores::create([
            'valor'    => 'Alisado',
            'slug'     => Str::kebab('Superficie externa '),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_externa')
        ]);
        ListaValores::create([
            'valor'    => 'Baño',
            'slug'     => Str::kebab('Superficie externa Bano'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_externa')
        ]);
        ListaValores::create([
            'valor'    => 'Engobe',
            'slug'     => Str::kebab('Superficie externa Engobe'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_externa')
        ]);
        ListaValores::create([
            'valor'    => 'Sin tratamiento',
            'slug'     => Str::kebab('Superficie externa Sin tratamiento'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_externa')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Superficie externa Sin informacion'),
            'lista_id' => config('constants.lista_valores.petrografia.superficie_externa')
        ]);

        /**
         * Ambiente de cocción
         */
        ListaValores::create([
            'valor'    => 'Atmósfera Reductora',
            'slug'     => Str::kebab('Ambiente de coccion Atmosfera Reductora'),
            'lista_id' => config('constants.lista_valores.petrografia.ambiente_coccion')
        ]);
        ListaValores::create([
            'valor'    => 'Atmósfera Oxidante',
            'slug'     => Str::kebab('Ambiente de coccion Atmosfera Oxidante'),
            'lista_id' => config('constants.lista_valores.petrografia.ambiente_coccion')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Ambiente de coccion Sin informacion'),
            'lista_id' => config('constants.lista_valores.petrografia.ambiente_coccion')
        ]);

        // ----------- Difracción de rayos X ----------- //
        /**
         * Composición de la pasta (DRX orientado)
         */
        ListaValores::create([
            'valor'    => 'Caolinita',
            'slug'     => Str::kebab('Composicion pasta Caolinita'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pasta')
        ]);
        ListaValores::create([
            'valor'    => 'Esmectita',
            'slug'     => Str::kebab('Composicion pasta Esmectita'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pasta')
        ]);
        ListaValores::create([
            'valor'    => 'Illita',
            'slug'     => Str::kebab('Composicion pasta Illita'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pasta')
        ]);
        ListaValores::create([
            'valor'    => 'Modmorillonita',
            'slug'     => Str::kebab('Composicion pasta Modmorillonita'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pasta')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Composicion pasta Sin informacion'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pasta')
        ]);

        /**
         * Composición inorgánica segundo nivel
         */
        ListaValores::create([
            'valor'    => 'Anfibol',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Anfibol'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Cuarzo',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Cuarzo'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Feldespato alcalino',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Feldespato alcalino'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Magnetita',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Magnetita'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Olivino',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Olivino'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Ópalo',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Opalo'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Piroxeno',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Piroxeno'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Plagioclasa',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Plagioclasa'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Vidrio volcánico',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Vidrio volcanico'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Zircón',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Zircon'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);
        ListaValores::create([
            'valor'    => 'Sin información',
            'slug'     => Str::kebab('Composicion inorganica segundo nivel Sin informacion'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_inorgánica')
        ]);

        /**
         * Composición pigmentos
         */
        ListaValores::create([
            'valor'    => 'Inorgánicos',
            'slug'     => Str::kebab('Composicion pigmentos Inorganicos'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pigmentos')
        ]);
        ListaValores::create([
            'valor'    => 'Orgánicos',
            'slug'     => Str::kebab('Composicion pigmentos Organicos'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pigmentos')
        ]);
        ListaValores::create([
            'valor'    => 'No Aplica',
            'slug'     => Str::kebab('Composicion pigmentos No Aplica'),
            'lista_id' => config('constants.lista_valores.difraccion_de_rayos_x.composicion_pigmentos')
        ]);

        // ----------- Datos generales Pieza clave ----------- //
        /**
         * Tipo de pieza
         */
        ListaValores::create([
            'valor'    => '(1) Fragmento no reconstruible',
            'slug'     => Str::kebab('Tipo de pieza Fragmento no reconstruible'),
            'lista_id' => config('constants.lista_valores.datos_generales_pieza_clave.tipo_de_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(2) Fragmento reconstruible',
            'slug'     => Str::kebab('Tipo de pieza Fragmento reconstruible'),
            'lista_id' => config('constants.lista_valores.datos_generales_pieza_clave.tipo_de_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(3) Pieza entera',
            'slug'     => Str::kebab('Tipo de pieza Pieza entera'),
            'lista_id' => config('constants.lista_valores.datos_generales_pieza_clave.tipo_de_pieza')
        ]);

        // ----------- Fragmento ----------- //
        /**
         * Localización dentro de la forma
         */
        ListaValores::create([
            'valor'    => 'Agarradera',
            'slug'     => Str::kebab('Localización dentro forma Agarradera'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Asa',
            'slug'     => Str::kebab('Localización dentro forma Asa'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Base',
            'slug'     => Str::kebab('Localización dentro forma Base'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Boca',
            'slug'     => Str::kebab('Localización dentro forma Boca'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Borde',
            'slug'     => Str::kebab('Localización dentro forma Borde'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Cuello',
            'slug'     => Str::kebab('Localización dentro forma Cuello'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Cuerpo',
            'slug'     => Str::kebab('Localización dentro forma Cuerpo'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Hombro',
            'slug'     => Str::kebab('Localización dentro forma Hombro'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Mango',
            'slug'     => Str::kebab('Localización dentro forma Mango'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Soporte',
            'slug'     => Str::kebab('Localización dentro forma Soporte'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Parte de figurina',
            'slug'     => Str::kebab('Localización dentro forma Parte figurina'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Parte de Instrumento',
            'slug'     => Str::kebab('Localización dentro forma Parte Instrumento'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Parte de sello, rodillo, volante de huso',
            'slug'     => Str::kebab('Localización dentro forma Parte de sello rodillo volante huso'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Tapa',
            'slug'     => Str::kebab('Localización dentro forma Tapa'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Vertedera',
            'slug'     => Str::kebab('Localización dentro forma Vertedera'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);
        ListaValores::create([
            'valor'    => 'Otro',
            'slug'     => Str::kebab('Localización dentro forma Otro'),
            'lista_id' => config('constants.lista_valores.fragmento.localizacion_dentro_forma')
        ]);

        /**
         * Porcentaje en la forma
         */
        ListaValores::create([
            'valor'    => '1-10%',
            'slug'     => Str::kebab('Porcentaje-1-10'),
            'lista_id' => config('constants.lista_valores.fragmento.porcentaje_forma')
        ]);
        ListaValores::create([
            'valor'    => '10-25%',
            'slug'     => Str::kebab('Porcentaje-10-25'),
            'lista_id' => config('constants.lista_valores.fragmento.porcentaje_forma')
        ]);
        ListaValores::create([
            'valor'    => '25-50%',
            'slug'     => Str::kebab('Porcentaje-25-50'),
            'lista_id' => config('constants.lista_valores.fragmento.porcentaje_forma')
        ]);
        ListaValores::create([
            'valor'    => '50-75%',
            'slug'     => Str::kebab('Porcentaje-50-75'),
            'lista_id' => config('constants.lista_valores.fragmento.porcentaje_forma')
        ]);
        ListaValores::create([
            'valor'    => '75-99%',
            'slug'     => Str::kebab('Porcentaje-75-99'),
            'lista_id' => config('constants.lista_valores.fragmento.porcentaje_forma')
        ]);
        ListaValores::create([
            'valor'    => '100%',
            'slug'     => Str::kebab('Porcentaje-100'),
            'lista_id' => config('constants.lista_valores.fragmento.porcentaje_forma')
        ]);

        /**
         * Confiabilidad de la reconstrucción
         */
        ListaValores::create([
            'valor'    => '(1) No es posible reconstruir la inclinación exacta de la forma',
            'slug'     => Str::kebab('Confiabilidad reconstrucción no es posible'),
            'lista_id' => config('constants.lista_valores.fragmento.confiabilidad_reconstruccion')
        ]);
        ListaValores::create([
            'valor'    => '(2) La forma se logra reconstruir por comparación con otras vasijas',
            'slug'     => Str::kebab('Confiabilidad reconstrucción se logra reconstruir'),
            'lista_id' => config('constants.lista_valores.fragmento.confiabilidad_reconstruccion')
        ]);
        ListaValores::create([
            'valor'    => '(3) Se puede reconstruir la forma porque el fragmento es suficientemente amplio y descriptivo',
            'slug'     => Str::kebab('Confiabilidad reconstrucción se puede reconstruir'),
            'lista_id' => config('constants.lista_valores.fragmento.confiabilidad_reconstruccion')
        ]);

        // ----------- Contexto ----------- //
        /**
         * Procedencia y seguridad del hallazgo
         */
        ListaValores::create([
            'valor'    => '1: Pieza o fragmento sin ningun tipo de referencia de contexto arqueológico',
            'slug'     => Str::kebab('Procedencia seguridad hallazgo-1'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_seguridad_hallazgo')
        ]);
        ListaValores::create([
            'valor'    => '2: Pieza o fragmento sin ningun tipo de referencia de contexto arqueológico, con algún tipo de información asociada (etnográfica, local, etc)',
            'slug'     => Str::kebab('Procedencia seguridad hallazgo-2'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_seguridad_hallazgo')
        ]);
        ListaValores::create([
            'valor'    => '3: Prospección arqueológica: Recolección superficial',
            'slug'     => Str::kebab('Procedencia seguridad hallazgo-3'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_seguridad_hallazgo')
        ]);
        ListaValores::create([
            'valor'    => '4: Prospección arqueológica: realizada por pozos de sondeo',
            'slug'     => Str::kebab('Procedencia seguridad hallazgo-4'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_seguridad_hallazgo')
        ]);
        ListaValores::create([
            'valor'    => '5: Excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Procedencia seguridad hallazgo-5'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_seguridad_hallazgo')
        ]);
        ListaValores::create([
            'valor'    => '6: Excavación por niveles arbitrarios con control de estratigrafía geológica y con control de los rasgos o unidades negativas',
            'slug'     => Str::kebab('Procedencia seguridad hallazgo-6'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_seguridad_hallazgo')
        ]);
        ListaValores::create([
            'valor'    => '7: Excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Procedencia seguridad hallazgo-7'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_seguridad_hallazgo')
        ]);

        /**
         * Procedencia, relaciones y seguridad de la pieza (o fragmento)
         */
        ListaValores::create([
            'valor'    => '(1) Colección publica/privada sin referencia alguna',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-1'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(2) Colección publica/privada con referencia geográfica general (departamento)',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-2'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(3) Colección publica/privada con referencia geográfica específica (finca-sitio-municipio)',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-3'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(4) Colección publica/privada con referencia geográfica específica procedente de prospección arqueológica (recol. sup. o pozozs de sondeo)',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-4'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(5) Colección publica/privada con relación formal y decorativa con piezas o fragmentos excavados: cronología relativa - excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-5'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(6) Colección publica/privada con relación formal y decorativa con piezas o fragmentos excavados: cronología relativa - excavación por niveles arbitrarios con control estratigráfico y de los rasgos / excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-6'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(7) Colección publica/privada. Pieza excavada: cronología relativa - excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-7'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(8) Colección publica/privada. Pieza excavada: cronología relativa - excavación por niveles arbitrarios con control estratigráfico y de los rasgos / excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-8'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(9) Colección publica/privada con relación formal y decorativa con piezas o fragmentos excavados: cronología absoluta - excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-9'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(10) Colección publica/privada con relación formal y decorativa con piezas o fragmentos excavados: cronología absoluta - excavación por niveles arbitrarios con control estratigráfico y de los rasgos / excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-10'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(11) Colección publica/privada. Pieza excavada: cronología absoluta - excavación por niveles arbitrarios',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-11'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);
        ListaValores::create([
            'valor'    => '(12) Colección publica/privada. Pieza excavada: cronología absoluta - excavación por niveles arbitrarios con control estratigráfico y de los rasgos / excavación con estratigrafía arqueológica',
            'slug'     => Str::kebab('Procedencia relaciones seguridad pieza-12'),
            'lista_id' => config('constants.lista_valores.contexto.procedencia_relaciones_seguridad_pieza')
        ]);

        // ----------- Otros ----------- //
        /**
         * Diligenciado por
         */
        ListaValores::create([
            'valor'    => 'Jennifer Gutierrez',
            'slug'     => Str::kebab('Diligenciado Por Jennifer Gutierrez'),
            'lista_id' => config('constants.lista_valores.otros.diligenciado_por')
        ]);
        ListaValores::create([
            'valor'    => 'Yoryeth Bastidas',
            'slug'     => Str::kebab('Diligenciado Por Yoryeth Bastidas'),
            'lista_id' => config('constants.lista_valores.otros.diligenciado_por')
        ]);
        ListaValores::create([
            'valor'    => 'Angela Bacca',
            'slug'     => Str::kebab('Diligenciado Por Angela Bacca'),
            'lista_id' => config('constants.lista_valores.otros.diligenciado_por')
        ]);
        ListaValores::create([
            'valor'    => 'Juliana Campuzano',
            'slug'     => Str::kebab('Diligenciado Por Juliana Campuzano'),
            'lista_id' => config('constants.lista_valores.otros.diligenciado_por')
        ]);
        ListaValores::create([
            'valor'    => 'Diana Mendoza',
            'slug'     => Str::kebab('Diligenciado Por Diana Mendoza'),
            'lista_id' => config('constants.lista_valores.otros.diligenciado_por')
        ]);
        ListaValores::create([
            'valor'    => 'Alberto Sarcina',
            'slug'     => Str::kebab('Diligenciado Por Alberto Sarcina'),
            'lista_id' => config('constants.lista_valores.otros.diligenciado_por')
        ]);

        /**
         * Colección
         */
        ListaValores::create([
            'valor'    => 'M.O.',
            'slug'     => Str::kebab('Coleccion mo'),
            'lista_id' => config('constants.lista_valores.otros.coleccion')
        ]);
        ListaValores::create([
            'valor'    => 'MUSA',
            'slug'     => Str::kebab('Coleccion musa'),
            'lista_id' => config('constants.lista_valores.otros.coleccion')
        ]);
        ListaValores::create([
            'valor'    => 'Mnal',
            'slug'     => Str::kebab('Coleccion Mnal'),
            'lista_id' => config('constants.lista_valores.otros.coleccion')
        ]);
        ListaValores::create([
            'valor'    => 'Lab_ICANH',
            'slug'     => Str::kebab('Coleccion Lab icanh'),
            'lista_id' => config('constants.lista_valores.otros.coleccion')
        ]);

    }
}
