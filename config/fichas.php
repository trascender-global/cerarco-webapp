<?php

return [
    'pieza_clave'      => [
        'omnitir' => ['Fotografías', 'Dibujos'],
        'titulos' => ['Pieza clave por', 'Fragmento', 'Contexto', 'Descripción formal', 'Decoración', 'Descripción técnica', 'Petrografía', 'Difracción de rayos X']
    ],
    'variantes'        => [
        'forma'         => 4,
        'decorativa'    => 5,
        'arqueometrica' => 6
    ],
    'columnas'         => [
        // Datos Generales
        ['id' => 1, 'fila' => 2, 'nombre' => 'Pieza Clave', 'lista' => 0, 'modelo' => false, 'pieza_clave' => true, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 2, 'fila' => 3, 'nombre' => 'Nombre', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false, 'modelo_bloque' => 'Descripción'],
        ['id' => 3, 'fila' => 4, 'nombre' => 'Descripción formal (resumen)', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => false, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción'],
        ['id' => 4, 'fila' => 1, 'nombre' => 'Código de modelo', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 5, 'fila' => 5, 'nombre' => 'Variantes de forma asociada', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 6, 'fila' => 6, 'nombre' => 'Variante decorativa asociada', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 7, 'fila' => 7, 'nombre' => 'Variante arqueométrica asociada', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 8, 'fila' => 8, 'nombre' => 'Área geográfica', 'lista' => 1, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 9, 'fila' => 9, 'nombre' => 'Subregión geográfica', 'lista' => 2, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 10, 'fila' => 10, 'nombre' => 'Departamento', 'lista' => 3, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 11, 'fila' => 11, 'nombre' => 'Municipio de hallazgo', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 12, 'fila' => 12, 'nombre' => 'Sitio arqueológico de hallazgo', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 13, 'fila' => 13, 'nombre' => 'Clasificación existente', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 14, 'fila' => 14, 'nombre' => 'Confiabilidad del Modelo', 'lista' => 5, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 15, 'fila' => 15, 'nombre' => 'Modelo conformado por piezas procedentes de:', 'lista' => 6, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 16, 'fila' => 16, 'nombre' => 'Integridad de la pieza', 'lista' => 7, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 17, 'fila' => 17, 'nombre' => 'Funcion Primaria', 'lista' => 8, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción','arqueometrica_bloque' => 'Descripción'],
        ['id' => 18, 'fila' => 18, 'nombre' => 'Contexto', 'lista' => 9, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 19, 'fila' => 19, 'nombre' => 'Pieza Clave Por', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => false, 'forma_bloque' => 'Descripción', 'decorativa_bloque' => 'Descripción', 'modelo_bloque' => 'Descripción'],

        // Cronologia
        ['id' => 20, 'fila' => 21, 'nombre' => 'Cronología', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Cronología', 'decorativa_bloque' => 'Cronología', 'modelo_bloque' => 'Cronología','arqueometrica_bloque' => 'Cronología'],
        ['id' => 21, 'fila' => 22, 'nombre' => 'Fecha máxima', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Cronología', 'decorativa_bloque' => 'Cronología', 'modelo_bloque' => 'Cronología','arqueometrica_bloque' => 'Cronología'],
        ['id' => 22, 'fila' => 23, 'nombre' => 'Maxima AC-DC', 'lista' => 10, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Cronología', 'decorativa_bloque' => 'Cronología', 'modelo_bloque' => 'Cronología','arqueometrica_bloque' => 'Cronología'],
        ['id' => 23, 'fila' => 24, 'nombre' => 'Fecha mínima', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Cronología', 'decorativa_bloque' => 'Cronología', 'modelo_bloque' => 'Cronología','arqueometrica_bloque' => 'Cronología'],
        ['id' => 24, 'fila' => 25, 'nombre' => 'Minima AC-DC', 'lista' => 10, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Cronología', 'decorativa_bloque' => 'Cronología', 'modelo_bloque' => 'Cronología','arqueometrica_bloque' => 'Cronología'],
        ['id' => 25, 'fila' => 26, 'nombre' => 'Cronología relativa', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Cronología', 'decorativa_bloque' => 'Cronología', 'modelo_bloque' => 'Cronología','arqueometrica_bloque' => 'Cronología'],
        ['id' => 26, 'fila' => 27, 'nombre' => 'Método de datación', 'lista' => 11, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 27, 'fila' => 28, 'nombre' => 'Códigos de laboratorio', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],

        // Fragmento
        ['id' => 28, 'fila' => 30, 'nombre' => 'Fr Localización dentro de la forma', 'lista' => 50, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 29, 'fila' => 31, 'nombre' => 'Porcentaje en la forma', 'lista' => 51, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 30, 'fila' => 32, 'nombre' => 'Confiabilidad de la reconstrucción', 'lista' => 52, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],

        // Contexto
        ['id' => 31, 'fila' => 34, 'nombre' => 'Procedencia y seguridad del hallazgo', 'lista' => 53, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 32, 'fila' => 35, 'nombre' => 'Procedencia, relaciones y seguridad de la pieza (o fragmento)', 'lista' => 54, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 33, 'fila' => 36, 'nombre' => 'Observaciones sobre el hallazgo', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 34, 'fila' => 37, 'nombre' => 'Ubicación actual', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],
        ['id' => 35, 'fila' => 38, 'nombre' => 'Código de la pieza', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false],

        // Descripción Forma
        ['id' => 36, 'fila' => 41, 'nombre' => 'Alto (promedio)', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 37, 'fila' => 42, 'nombre' => 'Ancho (promedio)', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 38, 'fila' => 43, 'nombre' => 'Espesor promedio', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 39, 'fila' => 44, 'nombre' => 'Espesor en el borde', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 40, 'fila' => 45, 'nombre' => 'Espesor en el cuerpo', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 41, 'fila' => 46, 'nombre' => 'Espesor en la base', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 42, 'fila' => 40, 'nombre' => 'Forma base', 'lista' => 12, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 43, 'fila' => 47, 'nombre' => 'Boca', 'lista' => 13, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 44, 'fila' => 48, 'nombre' => 'Borde', 'lista' => 14, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 45, 'fila' => 49, 'nombre' => 'Labio', 'lista' => 15, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 46, 'fila' => 50, 'nombre' => 'Cuello', 'lista' => 16, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 47, 'fila' => 51, 'nombre' => 'Hombro', 'lista' => 17, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 48, 'fila' => 52, 'nombre' => 'Cuerpo', 'lista' => 18, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 49, 'fila' => 53, 'nombre' => 'Fondo', 'lista' => 19, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 50, 'fila' => 54, 'nombre' => 'Base', 'lista' => 20, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 51, 'fila' => 55, 'nombre' => 'Soporte', 'lista' => 21, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 52, 'fila' => 56, 'nombre' => 'Asa', 'lista' => 22, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 53, 'fila' => 57, 'nombre' => 'Agarradera', 'lista' => 23, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 54, 'fila' => 58, 'nombre' => 'Mango', 'lista' => 24, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 55, 'fila' => 59, 'nombre' => 'Vertedera', 'lista' => 25, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 56, 'fila' => 60, 'nombre' => 'Caras (sellos)', 'lista' => 26, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 57, 'fila' => 61, 'nombre' => 'Tipo de figurina', 'lista' => 27, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 58, 'fila' => 62, 'nombre' => 'Tipo de instrumento musical', 'lista' => 28, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 59, 'fila' => 63, 'nombre' => 'Diámetro hueco promedio (rodillos)', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 60, 'fila' => 64, 'nombre' => 'Diámetro externo promedio (rodillos-volantes de huso)', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],
        ['id' => 61, 'fila' => 65, 'nombre' => 'Observaciones descripción formal', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => true, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Descripción Formal', 'modelo_bloque' => 'Descripción formal'],

        // Decoracion
        ['id' => 62, 'fila' => 67, 'nombre' => 'Descripción', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 63, 'fila' => 68, 'nombre' => 'Dec Tratamiento de la superficie', 'lista' => 30, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 64, 'fila' => 69, 'nombre' => 'Decoración 1', 'lista' => 29, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 65, 'fila' => 70, 'nombre' => 'Decoración 2', 'lista' => 29, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 66, 'fila' => 71, 'nombre' => 'Decoración 3', 'lista' => 29, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 67, 'fila' => 72, 'nombre' => 'Localización dentro de la forma', 'lista' => 31, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 68, 'fila' => 73, 'nombre' => 'Color (engobe, si tiene) - Código Munsell', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 69, 'fila' => 74, 'nombre' => 'Color (engobe, si tiene) - Nombre Munsell', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 70, 'fila' => 75, 'nombre' => 'Color (pintura, si tiene) - Código Munsell', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 71, 'fila' => 76, 'nombre' => 'Color (pintura, si tiene) - Nombre Munsell', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],
        ['id' => 72, 'fila' => 77, 'nombre' => 'Observaciones decoración', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => true, 'arqueometrica' => false, 'decorativa_bloque' => 'Decoración', 'modelo_bloque' => 'Decoración'],

        // Descripción Tecnica
        ['id' => 73, 'fila' => 79, 'nombre' => 'Técnica de manufactura', 'lista' => 36, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 74, 'fila' => 80, 'nombre' => 'Tratamiento de la superficie', 'lista' => 30, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 75, 'fila' => 81, 'nombre' => 'Acabado de la superficie interna', 'lista' => 32, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 76, 'fila' => 82, 'nombre' => 'Acabado de la superficie externa', 'lista' => 32, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 77, 'fila' => 83, 'nombre' => 'Textura (interna)', 'lista' => 33, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 78, 'fila' => 84, 'nombre' => 'Textura (externa)', 'lista' => 33, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 79, 'fila' => 85, 'nombre' => 'Granulometría', 'lista' => 34, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 80, 'fila' => 86, 'nombre' => 'Color Pasta (Rango mínimo) - Código Munsell', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 81, 'fila' => 87, 'nombre' => 'Color Pasta (Rango mínimo) - Nombre Munsell', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 82, 'fila' => 88, 'nombre' => 'Color Pasta (Rango máximo) - Código Munsell', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 83, 'fila' => 89, 'nombre' => 'Color Pasta (Rango máximo) - Nombre Munsell', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 84, 'fila' => 90, 'nombre' => 'Ambiente de cocción 1', 'lista' => 35, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 85, 'fila' => 91, 'nombre' => 'Ambiente de cocción 2', 'lista' => 35, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 86, 'fila' => 92, 'nombre' => 'Nubes de cocción o rastros de carbonización en la superficie', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],
        ['id' => 87, 'fila' => 93, 'nombre' => 'Observaciones descripción técnica', 'lista' => 0, 'modelo' => true, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Descripción técnica', 'modelo_bloque' => 'Descripción técnica'],

        // Petrografia
        ///nuevos
        ['id' => 101, 'fila' => 95, 'nombre' => 'Porosidad (pasta)', 'lista' => 57, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        ['id' => 102, 'fila' => 96, 'nombre' => 'Porosidad (forma de los poros)', 'lista' => 58, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        ['id' => 103, 'fila' => 97, 'nombre' => 'Porosidad (tamaño de los poros)', 'lista' => 59, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        //
        ['id' => 88, 'fila' => 98, 'nombre' => 'Composición inorganica (antiplástico)', 'lista' => 38, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        ['id' => 89, 'fila' => 99, 'nombre' => 'Composición orgánica (antiplástico)', 'lista' => 39, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        
        //nuevos
        ['id' => 104, 'fila' => 100, 'nombre' => 'Comentarios sobre composición (inclusiones añadidas e inclusiones naturales)', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        ['id' => 105, 'fila' => 101, 'nombre' => 'Comentarios sobre composición (detalles sobre petrografía)', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        //
        ['id' => 90, 'fila' => 102, 'nombre' => 'Forma de los granos (antiplástico)', 'lista' => 40, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        ['id' => 91, 'fila' => 103, 'nombre' => 'Esfericidad de los granos (antiplástico)', 'lista' => 41, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        
        //nuevos
        ['id' => 106, 'fila' => 104, 'nombre' => 'Tamaño de los granos (antiplástico)', 'lista' => 60, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],
        //
        ['id' => 92, 'fila' => 105, 'nombre' => 'Disposición (antiplástico)', 'lista' => 42, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Petrografía'],

        // Difracion de Rayos X
        ['id' => 94, 'fila' => 107, 'nombre' => 'Composición de la pasta (DRX orientado)', 'lista' => 46, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Difracción de rayos X'],
        ['id' => 95, 'fila' => 108, 'nombre' => 'Composición inorgánica segundo nivel', 'lista' => 47, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Difracción de rayos X'],
        ['id' => 96, 'fila' => 109, 'nombre' => 'Composición pigmentos', 'lista' => 48, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Difracción de rayos X'],

        //nuevos microscopio
        ['id' => 107, 'fila' => 111, 'nombre' => 'Composición', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => true, 'arqueometrica_bloque' => 'Microscopio electrónico de barrido'],

        //

        ['id' => 98, 'fila' => 112, 'nombre' => 'Fotografías', 'lista' => 0, 'modelo' => false, 'pieza_clave' => false, 'forma' => false, 'decorativa' => false, 'arqueometrica' => false, 'forma_bloque' => 'Bibliografía', 'decorativa_bloque' => 'Bibliografía', 'arqueometrica_bloque' => 'Bibliografía', 'modelo_bloque' => 'Bibliografía'],
        ['id' => 97, 'fila' => 114, 'nombre' => 'Bibliografía', 'lista' => 0, 'modelo' => true, 'pieza_clave' => true, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Bibliografía', 'decorativa_bloque' => 'Bibliografía', 'arqueometrica_bloque' => 'Bibliografía', 'modelo_bloque' => 'Bibliografía'],
        ['id' => 100, 'fila' => 116, 'nombre' => 'Código interno', 'lista' => 0, 'modelo' => true, 'pieza_clave' => true, 'forma' => true, 'decorativa' => true, 'arqueometrica' => true, 'forma_bloque' => 'Bibliografía', 'decorativa_bloque' => 'Bibliografía', 'arqueometrica_bloque' => 'Bibliografía', 'modelo_bloque' => 'Bibliografía'],
    ],
    'columnas_detalle' => [
        'Datos Generales'      => [
            'Nombre'                                       => 2,
            'Descripción formal (resumen)'                 => 3,
            'Código de modelo'                             => 4,
            'Variantes de forma asociada'                  => 5,
            'Variante decorativa asociada'                 => 6,
            'Variante arqueométrica asociada'              => 7,
            'Área geográfica'                              => 8,
            'Subregión geográfica'                         => 9,
            'Departamento'                                 => 10,
            'Municipio de hallazgo'                        => 11,
            'Sitio arqueológico de hallazgo'               => 12,
            'Clasificación existente'                      => 13,
            'Confiabilidad del Modelo'                     => 14,
            'Modelo conformado por piezas procedentes de:' => 15,
            'Integridad de la pieza'                       => 16,
            'Funcion Primaria'                             => 17,
            'Contexto'                                     => 18,
            'Pieza Clave Por'                              => 19,
        ],
        'Cronologia'           => [
            'Cronología'             => 20,
            'Maxima'                 => 21,
            'Maxima AC-DC'           => 22,
            'Minima'                 => 23,
            'Minima AC-DC'           => 24,
            'Cronología relativa'    => 25,
            'Método de datación'     => 26,
            'Códigos de laboratorio' => 27,
        ],
        'Fragmento'            => [
            'Localización dentro de la forma'    => 28,
            'Porcentaje en la forma'             => 29,
            'Confiabilidad de la reconstrucción' => 30,
        ],
        'Contexto'             => [
            'Procedencia y seguridad del hallazgo'                          => 31,
            'Procedencia, relaciones y seguridad de la pieza (o fragmento)' => 32,
            'Observaciones sobre el hallazgo'                               => 33,
            'Ubicación actual'                                              => 34,
            'Código de la pieza'                                            => 35,
        ],
        'Descripción Formal'   => [
            'Alto (promedio)'                                       => 36,
            'Ancho (promedio)'                                      => 37,
            'Espesor promedio'                                      => 38,
            'Espesor en el borde'                                   => 39,
            'Espesor en el cuerpo'                                  => 40,
            'Espesor en la base'                                    => 41,
            'Forma base'                                            => 42,
            'Boca'                                                  => 43,
            'Borde'                                                 => 44,
            'Labio'                                                 => 45,
            'Cuello'                                                => 46,
            'Hombro'                                                => 47,
            'Cuerpo'                                                => 48,
            'Fondo'                                                 => 49,
            'Base'                                                  => 50,
            'Soporte'                                               => 51,
            'Asa'                                                   => 52,
            'Agarradera'                                            => 53,
            'Mango'                                                 => 54,
            'Vertedera'                                             => 55,
            'Caras (sellos)'                                        => 56,
            'Tipo de figurina'                                      => 57,
            'Tipo de instrumento musical'                           => 58,
            'Diámetro hueco promedio (rodillos)'                    => 59,
            'Diámetro externo promedio (rodillos-volantes de huso)' => 60,
            'Observaciones descripción formal'                      => 61,
        ],
        'Decoracion'           => [
            'Descripción'                                => 62,
            'Tratamiento de la superficie'               => 63,
            'Decoración 1'                               => 64,
            'Decoración 2'                               => 65,
            'Decoración 3'                               => 66,
            'Localización dentro de la forma'            => 67,
            'Color (engobe, si tiene) - Código Munsell'  => 68,
            'Color (engobe, si tiene) - Nombre Munsell'  => 69,
            'Color (pintura, si tiene) - Código Munsell' => 70,
            'Color (pintura, si tiene) - Nombre Munsell' => 71,
            'Observaciones decoración'                   => 72,
        ],
        'Descripción Tecnica'  => [
            'Técnica de manufactura'                                       => 73,
            'Tratamiento de la superficie'                                 => 74,
            'Acabado de la superficie interna'                             => 75,
            'Acabado de la superficie externa'                             => 76,
            'Textura (interna)'                                            => 77,
            'Textura (externa)'                                            => 78,
            'Granulometría'                                                => 79,
            'Color Pasta (Rango mínimo) - Código Munsell'                  => 80,
            'Color Pasta (Rango mínimo) - Nombre Munsell'                  => 81,
            'Color Pasta (Rango máximo) - Código Munsell'                  => 82,
            'Color Pasta (Rango máximo) - Nombre Munsell'                  => 83,
            'Ambiente de cocción 1'                                        => 84,
            'Ambiente de cocción 2'                                        => 85,
            'Nubes de cocción o rastros de carbonización en la superficie' => 86,
            'Observaciones descripción técnica'                            => 87,
        ],
        'Petrografia'          => [
            'Composición inorganica (antiplástico)'    => 88,
            'Composición orgánica (antiplástico)'      => 89,
            'Forma de los granos (antiplástico)'       => 90,
            'Esfericidad de los granos (antiplástico)' => 91,
            'Disposición (antiplástico)'               => 92,
        ],
        'Difracion de Rayos X' => [
            'Composición de la pasta (DRX orientado)' => 94,
            'Composición inorgánica segundo nivel'    => 95,
            'Composición pigmentos'                   => 96,
        ],
        'Otros'                => [
            'Pieza Clave'    => 1,
            'Fotografías'    => 97,
            'Bibliografía'   => 98,
            'Código interno' => 100,
        ]
    ],
];
