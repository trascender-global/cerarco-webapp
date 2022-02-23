<?php /** @noinspection ALL */

namespace Database\Seeders;

use App\Models\GlosarioMenu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class GlosarioMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        DB::table('glosario_menus')->truncate();

        GlosarioMenu::create([
            'nombre'      => Str::title('INTRODUCCIÓN'),
            'descripcion' => Str::title('INTRODUCCIÓN'),
            'slug'        => Str::kebab(Str::lower('INTRODUCCIoN')),
            'titulo'      => true,
        ]);

        /*************************
         *                       *
         * Menu y Submenus       *
         * Aspectos Tecnológicos *
         *                       *
         *************************/
        GlosarioMenu::create([
            'nombre'      => Str::title('ASPECTOS TECNOLÓGICOS'),
            'descripcion' => Str::title('ASPECTOS TECNOLÓGICOS: Basados en Balfet et al (1992)'),
            'slug'        => Str::kebab(Str::lower('ASPECTOS TECNOLoGICOS')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('ASPECTOS TECNOLoGICOS')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('Terminos generales'),
            'descripcion'      => Str::title('Terminos generales'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS TECNOLoGICOS').' Terminos generales'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Técnicas de manufactura'),
            'descripcion'      => Str::title('Técnicas de manufactura'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS TECNOLoGICOS').' Tecnicas de manufactura'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Cocción'),
            'descripcion'      => Str::title('Cocción'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS TECNOLoGICOS').' Coccion'),
            'glosario_menu_id' => $menuId
        ]);

        /*********************************************
         *                                           *
         * Menu y Submenus                           *
         * Aspectos Metodologicos Para Descripcion Vasija *
         *                                           *
         *********************************************/
        GlosarioMenu::create([
            'nombre'      => Str::title('Aspectos METODOLOGICOS para descripcion vasija'),
            'descripcion' => Str::title('ASPECTOS METODOLOGICOS PARA LA DESCRIPCION DE UNA VASIJA CERAMICA'),
            'slug'        => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('Metodología para la descripción'),
            'descripcion'      => Str::title('Metodología para la descripción'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Metodologia para la descripcion'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Partes básicas de una vasija'),
            'descripcion'      => Str::title('Partes básicas de una vasija'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Partes basicas de una vasija'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Tipos de vasija'),
            'descripcion'      => Str::title('Tipos de vasija'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Tipos de vasija'),
            'glosario_menu_id' => $menuId
        ]);

        /**************************************
         *                                    *
         * Menu y Submenus                    *
         * Elementos Que Conforman Una Vasija *
         *                                    *
         **************************************/
        GlosarioMenu::create([
            'nombre'      => Str::title('ELEMENTOS QUE CONFORMAN UNA VASIJA'),
            'descripcion' => Str::title('ELEMENTOS QUE CONFORMAN UNA VASIJA'),
            'slug'        => Str::kebab(Str::lower('ELEMENTOS CONFORMAN VASIJA')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('ELEMENTOS CONFORMAN VASIJA')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('Boca'),
            'descripcion'      => Str::title('Boca'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Boca'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Borde (direccion)'),
            'descripcion'      => Str::title('Borde (direccion)'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Borde (direccion)'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Borde (Morfologia)'),
            'descripcion'      => Str::title('Borde (Morfologia)'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Borde (Morfologia)'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Labio'),
            'descripcion'      => Str::title('Labio'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Labio'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Cuello'),
            'descripcion'      => Str::title('Cuello'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Cuello'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Hombro'),
            'descripcion'      => Str::title('Hombro'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Hombro'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Cuerpo (de forma simple)'),
            'descripcion'      => Str::title('Cuerpo (de forma simple)'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Cuerpo (de forma simple)'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Cuerpo (de forma compuesta)'),
            'descripcion'      => Str::title('Cuerpo (de forma compuesta)'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Cuerpo (de forma compuesta)'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Cuerpo (de formas específicas)'),
            'descripcion'      => Str::title('Cuerpo (de formas específicas)'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Cuerpo (de formas específicas)'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Fondo'),
            'descripcion'      => Str::title('Fondo'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Fondo'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Base'),
            'descripcion'      => Str::title('Base'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Base'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Soporte'),
            'descripcion'      => Str::title('Soporte'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Soporte'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Asa'),
            'descripcion'      => Str::title('Asa'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Asa'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Agarradera'),
            'descripcion'      => Str::title('Agarradera'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Agarradera'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Mango'),
            'descripcion'      => Str::title('Mango'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Mango'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Vertedera'),
            'descripcion'      => Str::title('Vertedera'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Vertedera'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Tapa y TAPoN'),
            'descripcion'      => Str::title('Tapa y TAPoN'),
            'slug'             => Str::kebab(Str::lower('ASPECTOS METODOLOGICOS PARA DESCRIPCION VASIJA CERAMICA').' Tapa y TAPoN'),
            'glosario_menu_id' => $menuId
        ]);


        /*******************
         *                 *
         * Menu y Submenus *
         * Formas          *
         *                 *
         *******************/
        GlosarioMenu::create([
            'nombre'      => Str::title('Formas'),
            'descripcion' => Str::title('Formas'),
            'slug'        => Str::kebab(Str::lower('Formas')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('Formas')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('Placa'),
            'descripcion'      => Str::title('Placa'),
            'slug'             => Str::kebab(Str::lower('Formas').' Placa'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Budare'),
            'descripcion'      => Str::title('Budare'),
            'slug'             => Str::kebab(Str::lower('Formas').' Budare'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Plato'),
            'descripcion'      => Str::title('Plato'),
            'slug'             => Str::kebab(Str::lower('Formas').' Plato'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Sartén'),
            'descripcion'      => Str::title('Sartén'),
            'slug'             => Str::kebab(Str::lower('Formas').' Sartén'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Cuenco'),
            'descripcion'      => Str::title('Cuenco'),
            'slug'             => Str::kebab(Str::lower('Formas').' Cuenco'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Cazuela'),
            'descripcion'      => Str::title('Cazuela'),
            'slug'             => Str::kebab(Str::lower('Formas').' Cazuela'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Vaso'),
            'descripcion'      => Str::title('Vaso'),
            'slug'             => Str::kebab(Str::lower('Formas').' Vaso'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Taza'),
            'descripcion'      => Str::title('Taza'),
            'slug'             => Str::kebab(Str::lower('Formas').' Taza'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Copa'),
            'descripcion'      => Str::title('Copa'),
            'slug'             => Str::kebab(Str::lower('Formas').' Copa'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Cucharón'),
            'descripcion'      => Str::title('Formas Cucharón'),
            'slug'             => Str::kebab(Str::lower('Formas').' Cucharón'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Olla'),
            'descripcion'      => Str::title('Olla'),
            'slug'             => Str::kebab(Str::lower('Formas').' Olla'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Tecomate'),
            'descripcion'      => Str::title('Formas Tecomate'),
            'slug'             => Str::kebab(Str::lower('Formas').' Tecomate'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Mocasín'),
            'descripcion'      => Str::title('Mocasín'),
            'slug'             => Str::kebab(Str::lower('Formas').' Mocasín'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Alcarraza'),
            'descripcion'      => Str::title('Formas Alcarraza'),
            'slug'             => Str::kebab(Str::lower('Formas').' Alcarraza'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Jarra'),
            'descripcion'      => Str::title('Jarra'),
            'slug'             => Str::kebab(Str::lower('Formas').' Jarra'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Múcura'),
            'descripcion'      => Str::title('Múcura'),
            'slug'             => Str::kebab(Str::lower('Formas').' Múcura'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Cántaro'),
            'descripcion'      => Str::title('Cántaro'),
            'slug'             => Str::kebab(Str::lower('Formas').' Cántaro'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Ánfora'),
            'descripcion'      => Str::title('Ánfora'),
            'slug'             => Str::kebab(Str::lower('Formas').' Ánfora'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Botella'),
            'descripcion'      => Str::title('Botella'),
            'slug'             => Str::kebab(Str::lower('Formas').' Botella'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Botellón'),
            'descripcion'      => Str::title('Formas Botellón'),
            'slug'             => Str::kebab(Str::lower('Formas').' Botellón'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Aríbalo'),
            'descripcion'      => Str::title('Aríbalo'),
            'slug'             => Str::kebab(Str::lower('Formas').' Aríbalo'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Barríl'),
            'descripcion'      => Str::title('Barríl'),
            'slug'             => Str::kebab(Str::lower('Formas').' Barríl'),
            'glosario_menu_id' => $menuId
        ]);


        /*******************
         *                 *
         * Menu y Submenus *
         * Forma/Función   *
         *                 *
         *******************/
        GlosarioMenu::create([
            'nombre'      => Str::title('FORMA/FUNCIÓN'),
            'descripcion' => Str::title('FORMA/FUNCIÓN'),
            'slug'        => Str::kebab(Str::lower('FORMA FUNCIoN')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('FORMA FUNCIoN')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('Urna'),
            'descripcion'      => Str::title('Urna'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Urna'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Poporo'),
            'descripcion'      => Str::title('Poporo'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Poporo'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Retablo'),
            'descripcion'      => Str::title('Retablo'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Retablo'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Figurilla'),
            'descripcion'      => Str::title('Figurilla'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Figurilla'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Sello'),
            'descripcion'      => Str::title('Sello'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Sello o pintadera'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Rodillo o pintadera'),
            'descripcion'      => Str::title('Rodillo o pintadera'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Rodillo o pintadera'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Instrumento musical (Aerófono)'),
            'descripcion'      => Str::title('Instrumento musical (Aerófono)'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Instrumento musical (Aerófono)'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Instrumento musical (Sonaja)'),
            'descripcion'      => Str::title('Instrumento musical (Sonaja)'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Instrumento musical (Sonaja)'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Volante de Huso'),
            'descripcion'      => Str::title('Volante de Huso'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Volante de Huso'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Rallador'),
            'descripcion'      => Str::title('Rallador'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Rallador'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Colador'),
            'descripcion'      => Str::title('Colador'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Colador'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Miniatura'),
            'descripcion'      => Str::title('Miniatura'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Miniatura'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Cuenta'),
            'descripcion'      => Str::title('Cuenta'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Cuenta'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Botella Silbato'),
            'descripcion'      => Str::title('Botella Silbato'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Botella Silbato'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Gacha'),
            'descripcion'      => Str::title('Gacha'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Gacha'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Incensario'),
            'descripcion'      => Str::title('Incensario'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Incensario'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Máscara'),
            'descripcion'      => Str::title('Máscara'),
            'slug'             => Str::kebab(Str::lower('FORMA FUNCIoN').' Máscara'),
            'glosario_menu_id' => $menuId
        ]);

        /****************************
         *                          *
         * Menu y Submenus          *
         * Acabado De La Superficie *
         *                          *
         ****************************/
        GlosarioMenu::create([
            'nombre'      => Str::title('ACABADO DE LA SUPERFICIE'),
            'descripcion' => Str::title('TRATAMIENTO DE LA SUPERFICIE DE LA PASTA – ACABADO DE LA SUPERFICIE'),
            'slug'        => Str::kebab(Str::lower('ACABADO SUPERFICIE')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('ACABADO SUPERFICIE')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('Alisado'),
            'descripcion'      => Str::title('Alisado'),
            'slug'             => Str::kebab(Str::lower('ACABADO SUPERFICIE').' Alisado'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Pulido'),
            'descripcion'      => Str::title('Pulido'),
            'slug'             => Str::kebab(Str::lower('ACABADO SUPERFICIE').' Pulido'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Bruñido'),
            'descripcion'      => Str::title('Bruñido'),
            'slug'             => Str::kebab(Str::lower('ACABADO SUPERFICIE').' Brunido'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Raspado'),
            'descripcion'      => Str::title('Raspado'),
            'slug'             => Str::kebab(Str::lower('ACABADO SUPERFICIE').' Raspado'),
            'glosario_menu_id' => $menuId
        ]);

        GlosarioMenu::create([
            'nombre'           => Str::title('Engobe'),
            'descripcion'      => Str::title('Engobe (Arguello, Fenoglio y Rubio: Tratamiento de la superficie)'),
            'slug'             => Str::kebab(Str::lower('ACABADO SUPERFICIE').' Engobe'),
            'glosario_menu_id' => $menuId
        ]);

        /*******************
         *                 *
         * Menu y Submenus *
         * Decoración      *
         *                 *
         *******************/
        GlosarioMenu::create([
            'nombre'      => Str::title('DECORACIÓN'),
            'descripcion' => Str::title('DECORACIÓN'),
            'slug'        => Str::kebab(Str::lower('DECORACIon')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('DECORACIÓN')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('Incisión'),
            'descripcion'      => Str::title('Incisión'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Incisión'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Excisión'),
            'descripcion'      => Str::title('Excisión'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Excisión'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Calado'),
            'descripcion'      => Str::title('Calado'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Calado'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Grabado'),
            'descripcion'      => Str::title('Grabado'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Grabado'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Hachurado'),
            'descripcion'      => Str::title('Hachurado'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Hachurado'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Acanalado'),
            'descripcion'      => Str::title('Acanalado'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Acanalado'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Impresión 1 (Con dedo)'),
            'descripcion'      => Str::title('Impresión 1 (Con dedo)'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Impresión 1 (Con dedo)'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Impresión 2 (Ungulación)'),
            'descripcion'      => Str::title('Impresión 2 (Ungulación)'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Impresión 2 (Ungulación)'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Impresión 3 (Con instrumentos)'),
            'descripcion'      => Str::title('Impresión 3 (Con instrumentos)'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Impresión 3 (Con instrumentos)'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Impresión 4 (Con sello)'),
            'descripcion'      => Str::title('Impresión 4 (Con sello)'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Impresión 4 (Con sello)'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Impresión 5 (Por rotación)'),
            'descripcion'      => Str::title('Impresión 5 (Por rotación)'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Impresión 5 (Por rotación)'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Impresión 6 (De mecedora)'),
            'descripcion'      => Str::title('Impresión 6 (De mecedora)'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Impresión 6 (De mecedora)'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Pintura'),
            'descripcion'      => Str::title('Pintura'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Pintura'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Baño'),
            'descripcion'      => Str::title('Baño'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Baño'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Ahumado'),
            'descripcion'      => Str::title('Ahumado'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Ahumado'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Modelado'),
            'descripcion'      => Str::title('Modelado'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Modelado'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Moldeado'),
            'descripcion'      => Str::title('Moldeado'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Moldeado'),
            'glosario_menu_id' => $menuId
        ]);
        GlosarioMenu::create([
            'nombre'           => Str::title('Aplicación'),
            'descripcion'      => Str::title('Aplicación'),
            'slug'             => Str::kebab(Str::lower('Decoración').' Aplicación'),
            'glosario_menu_id' => $menuId
        ]);

        /****************************
         *                          *
         * Menu y Submenus          *
         * Términos Complementarios *
         *                          *
         ****************************/
        GlosarioMenu::create([
            'nombre'      => Str::title('TÉRMINOS COMPLEMENTARIOS'),
            'descripcion' => Str::title('TÉRMINOS COMPLEMENTARIOS'),
            'slug'        => Str::kebab(Str::lower('TeRMINOS COMPLEMENTARIOS')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('TeRMINOS COMPLEMENTARIOS')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('General'),
            'descripcion'      => Str::title('General'),
            'slug'             => Str::kebab(Str::lower('Terminos Complementarios').' General'),
            'glosario_menu_id' => $menuId
        ]);

        /*******************
         *                 *
         * Menu y Submenus *
         * Bibliografías   *
         *                 *
         *******************/
        GlosarioMenu::create([
            'nombre'      => Str::title('BIBLIOGRAFÍA'),
            'descripcion' => Str::title('TEXTOS UTILIZADOS Y BIBLIOGRAFÍA'),
            'slug'        => Str::kebab(Str::lower('BIBLIOGRAFiA')),
            'titulo'      => true,
        ]);

        $menuId = GlosarioMenu::firstWhere('slug', Str::kebab(Str::lower('BIBLIOGRAFiA')))->id;
        GlosarioMenu::create([
            'nombre'           => Str::title('General'),
            'descripcion'      => Str::title('BIBLIOGRAFÍA General'),
            'slug'             => Str::kebab(Str::lower('BIBLIOGRAFiAs').' General'),
            'glosario_menu_id' => $menuId
        ]);

    }
}
