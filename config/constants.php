<?php

return [
    'parametrizacion'        => [
        'texto'    => 'texto',
        'textarea' => 'textarea',
        'titulo'   => 'titulo',
        'lista'    => 'lista',
    ],
    'roles'                  => [
        'super_admin' => 1,
        'admin'       => 2,
        'user'        => 3,
        'editor'      =>4
    ],
    'departamentos'          => [
        '05' => 1, // Antioquia
        '08' => 2, // Atlántico
        '11' => 3, // Bogotá, D.C.
        '13' => 4, // Bolívar
        '15' => 5, // Boyacá
        '17' => 6, // Caldas
        '18' => 7, // Caquetá
        '19' => 8, // Cauca
        '20' => 9, // Cesar
        '23' => 10, // Córdoba
        '25' => 11, // Cundinamarca
        '27' => 12, // Chocó
        '41' => 13, // Huila
        '44' => 14, // La Guajira
        '47' => 15, // Magdalena
        '50' => 16, // Meta
        '52' => 17, // Nariño
        '54' => 18, // Norte de Santander
        '63' => 19, // Quindio
        '66' => 20, // Risaralda
        '68' => 21, // Santander
        '70' => 22, // Sucre
        '73' => 23, // Tolima
        '76' => 24, // Valle del Cauca
        '81' => 25, // Arauca
        '85' => 26, // Casanare
        '86' => 27, // Putumayo
        '88' => 28, // Archipiélago de San Andrés, Providencia y Santa Catalina
        '91' => 29, // Amazonas
        '94' => 30, // Guainía
        '95' => 31, // Guaviare
        '97' => 32, // Vaupés
        '99' => 33, // Vichada

    ],
    'tipo_listas'            => [
        'datos_generales'             => 1,
        'cronologia_del_modelo'       => 2,
        'descripcion_formal'          => 3,
        'decoraciones'                => 4,
        'descripcion_tecnica'         => 5,
        'descripcion_fragmento'       => 6,
        'petrografia'                 => 7,
        'difraccion_de_rayos_x'       => 8,
        'datos_generales_pieza_clave' => 9,
        'fragmento'                   => 10,
        'contexto'                    => 11,
        'otros'                       => 12
    ],
    'lista_valores'          => [
        'datos_generales'             => [
            'area_geografica'                  => 1,
            'subregion_geografica'             => 2,
            'departamento'                     => 3,
            'publicacion_estado'               => 4,
            'confiabilidad_del_modelo'         => 5,
            'confiabilidad_modelo_procedentes' => 6,
            'integridad_de_la_pieza'           => 7,
            'funcion_primaria'                 => 8,
            'contexto'                         => 9,
        ],
        'cronologia_del_modelo'       => [
            'ac_dc'         => 10,
            'metodo_de_datacion' => 11
        ],
        'descripcion_formal'          => [
            'forma-base'          => 12,
            'boca'                => 13,
            'borde'               => 14,
            'labio'               => 15,
            'cuello'              => 16,
            'hombro'              => 17,
            'cuerpo'              => 18,
            'fondo'               => 19,
            'base'                => 20,
            'soporte'             => 21,
            'asa'                 => 22,
            'agarradera'          => 23,
            'mango'               => 24,
            'vertedera'           => 25,
            'caras'               => 26,
            'tipo_de_figurina'    => 27,
            'tipo_de_instrumento' => 28,
        ],
        'decoraciones'                => [
            'decoracion'                => 29,
            'tratamiento_superficie'    => 30,
            'localizacion_dentro_forma' => 31,
        ],
        'descripcion_tecnica'         => [
            'acabado_superficie'  => 32,
            'textura'             => 33,
            'granulometria'       => 34,
            'ambiente_coccion'    => 35,
            'tecnica_manufactura' => 36, 
        ],
        'descripcion_fragmento'       => [
            'confiabilidad_reconstruccion' => 37,
        ],
        'petrografia'                 => [
            'porosidad_pasta'        => 57,
            'porosidad_forma'        => 58,
            'porosidad_tamaño'       => 59,
            'tamaño_granos'          => 60,
            'composicion_inorganica' => 38,
            'composicion_organica'   => 39,
            'forma_granos'           => 40,
            'esfericidad_granos'     => 41,
            'disposicion'            => 42,
            'superficie_interna'     => 43,
            'superficie_externa'     => 44,
            'ambiente_coccion'       => 45,
        ],
        'difraccion_de_rayos_x'       => [
            'composicion_pasta'      => 46,
            'composicion_inorgánica' => 47,
            'composicion_pigmentos'  => 48,
        ],
        'datos_generales_pieza_clave' => [
            'tipo_de_pieza' => 49,
        ],
        'fragmento'                   => [
            'localizacion_dentro_forma'    => 50,
            'porcentaje_forma'             => 51,
            'confiabilidad_reconstruccion' => 52,
        ],
        'contexto'                    => [
            'procedencia_seguridad_hallazgo'         => 53,
            'procedencia_relaciones_seguridad_pieza' => 54,
        ],
        'otros'                       => [
            'diligenciado_por' => 55,
            'coleccion'        => 56,
        ],
    ],
    'pieza_clave_categorias' => [
        'datos_generales'     => 1,
        'cronologia'          => 2,
        'fragmento'           => 3,
        'contexto'            => 4,
        'descripcion_formal'  => 5,
        'decoracion'          => 6,
        'descripcion_tecnica' => 7,
        'petrografia'         => 8,
        'difracion_rayos_x'   => 9,
        'fotografias'         => 10,
        'dibujos'             => 11,
        'otros'               => 12,
        'microscopio_electronico_de_barrido' => 13,
    ],
];
