<?php

Auth::routes();
Route::post('register', 'Auth\RegisterController@register')
    ->name('register.create');

Route::middleware('is-admin')
    ->group(function () {

        Route::get('/', 'HomeController@root')
            ->name('index');

        Route::prefix('usuario')->name('usuario.')->group(function () {
            Route::get('perfil', 'UserController@perfilUsuario')
                ->name('perfil');
        });

        Route::prefix('fichas')->name('ficha.')->group(function () {

            Route::post("render/{type}", "FichasController@Render")
                ->name('render');

            Route::post("show/fotos", "FichasController@ShowFotos")
                ->name('show_fotos');

            Route::post("change/variante", "FichasController@ChangeVariante")
                ->name('change_variante'); 

                Route::post("delete/pieza", "FichasController@eliminarPiezaClaveEdit")
                ->name('delete_pieza'); 

            Route::post("save_pieza_clave/{len?}", "FichasController@crearPiezaClave")
                ->name('save_pieza_clave');

            Route::get("subir_ficha/", "FichasController@subirFicha")
                ->name('subir_ficha');

            Route::get("crear_ficha/", "FichasController@crearFicha")
                ->name('crear_ficha');

            Route::post("subir_ficha/", "FichasController@subirArchivoFicha")
                ->name('subir_archivo_ficha');

            Route::get("{modelo:codigo}/editar_ficha/", "FichasController@editarFicha")
                ->name('editar_ficha');

            Route::delete("{modelo:codigo}/borrar_ficha/", "FichasController@borrarFicha")
                ->name('borrar_ficha');

            Route::any("modificar_ficha", "FichasController@modificarCampo")
                ->name('modificarCampo');

            Route::post("{modelo:codigo}/editar_ficha/", "FichasController@salvarFicha")
                ->name('salvar_ficha');

            Route::post("{modelo:codigo}/{variante}/subir_fotos/", "FichasController@subirFotos")
                ->name('subir_fotos');

            Route::post("{modelo:codigo}/{variante}/mover_fotos/", "FichasController@moverFotos")
                ->name('mover_fotos');    

            Route::post("/subir_fotos_variante/{modelo?}/{variante?}/{varianteCodigo?}", "FichasController@subir_fotos_variante")
                ->name('subir_fotos_variante');

            Route::post("/mover_fotos_variante/{modelo:codigo}/{variante}/{varianteCodigo?}", "FichasController@mover_fotos_variante")
                ->name('mover_fotos_variante');

            Route::post("subir_fotos_pieza_clave/", "FichasController@subir_fotos_pieza_clave")
                ->name('subir_fotos_pieza_clave');

            Route::post("mover_fotos_pieza_clave/", "FichasController@mover_fotos_pieza_clave")
                ->name('mover_fotos_pieza_clave');

            Route::post("actualizar_dato_variante/", "FichasController@actualizarDatoVariante")
                ->name('actualizar_dato_variante');

            Route::post("borrar_foto/{id?}", "FichasController@borrarFoto")
                ->name('borrar_foto')
                ->where(['id' => '[0-9]+']);

            Route::post("borrar_foto_variante/{id?}", "FichasController@borrarFotoVariante")
                ->name('borrar_foto_variante')
                ->where(['id' => '[0-9]+']);

            Route::post("borrar_foto_pieza_clave/{id?}", "FichasController@borrarFotoClave")
                ->name('borrar_foto_pieza_clave')
                ->where(['id' => '[0-9]+']);

            Route::post("borrar_dibujo_pieza_clave/{id?}", "FichasController@borrarDibujoClave")
                ->name('borrar_dibujo_pieza_clave')
                ->where(['id' => '[0-9]+']);

            Route::post("subir_dibujos/{id?}", "FichasController@subirDibujos")
                ->name('subir_dibujos');
            
            Route::post("mover_dibujos/", "FichasController@moverDibujos")
                ->name('mover_dibujos');

            Route::get("listado/", "FichasController@listadoFichas")
                ->name('listado');

            Route::post("listado/", "FichasController@busquedaListadoFichas")
                ->name('listado_busqueda');

            Route::post("{pieza_clave:id}/agregar_puntos/{puntos?}", "FichasController@agregarPuntos")
                ->name('agregar_puntos');

            Route::post("{pieza_clave:id}/borrar_puntos/{puntos?}", "FichasController@borrarPuntos")
                ->name('borrar_puntos');
        });

        Route::prefix('glosario')->group(function () {

            Route::get("", "GlosarioController@index")
                ->name('glosario.listado');

            Route::get("editar_menu/{menu:slug?}", "GlosarioController@editarMenu")
                ->name('glosario.editar_menu');

            Route::get("nuevo_menu/{menu:slug?}", "GlosarioController@nuevoMenu")
                ->name('glosario.nuevo_menu');

            Route::post("salvar_nuevo_menu/{menu:slug?}", "GlosarioController@salvarNuevoMenu")
                ->name('glosario.salvar_nuevo_menu');

            Route::post("editar_menu/{contenido:id?}", "GlosarioController@salvarMenu")
                ->name('glosario.salvar_menu');

            Route::post("salvar_menu_titulo/{menu:id?}", "GlosarioController@salvarMenuTitulo")
                ->name('glosario.salvar_menu_titulo');

        });

        Route::prefix('usuarios')->name('usuarios.')->group(function () {
            Route::get("listado/", "UsuariosAdminController@listado")
                ->name('listado');

            Route::post("listado/", "UsuariosAdminController@listado")
                ->name('busqueda');

            Route::get("crear/", "UsuariosAdminController@crear")
                ->name('crear');

            Route::get("{user}/editar/", "UsuariosAdminController@editar")
                ->name('editar');

            Route::post("salvar/", "UsuariosAdminController@salvar")
                ->name('salvar');

            Route::post("{user}/actualizar/", "UsuariosAdminController@actualizar")
                ->name('actualizar');

            Route::delete("{user}/borrar/", "UsuariosAdminController@borrar")
                ->name('borrar');

        });

        Route::prefix('contenido')->name('contenido.')->group(function () {
            Route::get("catalogo/", "ContenidosController@catalogo")
                ->name('catalogo');

            Route::post("catalogo/{contenido:id}", "ContenidosController@salvarCatalogo")
                ->name('salvarCatalogo');

            Route::get("talleres/", "ContenidosController@listadoTalleres")
                ->name('talleres');

            Route::get("{contenido}/editar_taller/", "ContenidosController@editarTaller")
                ->name('editar_taller');

            Route::delete("{contenido}/borrar_taller/", "ContenidosController@borrarTaller")
                ->name('borrar_taller');

            Route::get("nuevo_taller", "ContenidosController@nuevoTaller")
                ->name('nuevo_taller');

            Route::post("salvarTaller/{contenido?}", "ContenidosController@salvarTaller")
                ->name('salvarTaller');

            Route::get("noticias/", "ContenidosController@listadoNoticias")
                ->name('noticias');

            Route::post('subir_imagen/{contenido?}', 'ContenidosController@subirImagen')
                ->name('subir_imagen');

            Route::get("nueva_noticia", "ContenidosController@nuevaNoticia")
                ->name('nueva_noticia');

            Route::post("salvarNoticia/{contenido?}", "ContenidosController@salvarNoticia")
                ->name('salvarNoticia');

            Route::get("{contenido}/editar_noticia/", "ContenidosController@editarNoticia")
                ->name('editar_noticia');

            Route::delete("{contenido}/borrar_noticia/", "ContenidosController@borrarNoticia")
                ->name('borrar_noticia');

        });

        Route::prefix('image')->group(function () {
            Route::post("upload", "ImageController@upload")
                ->name('image.upload');
        });

    });
