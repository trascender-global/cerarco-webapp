<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/{any}', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('index');
Route::get('/quienes_somos', 'HomeController@quienesSomos')->name('quienes_somos');

Route::prefix('glosario')->name('glosario.')->group(function () {
    Route::get('/', 'GlosarioController@glosario')->name('home');
    Route::post('/', 'GlosarioController@busqueda')->name('busqueda');
});

Route::prefix('buscador')->name('buscador.')->group(function () {
    Route::get('/', 'BuscadorController@buscador')->name('home');
    Route::post('/', 'BuscadorController@obtenerResultados')->name('busqueda');
});

Route::prefix('ficha')->name('ficha.')->group(function () {
    Route::get('{modelo:codigo}/informacion_ficha', 'FichaController@informacionFicha')->name('informacion_ficha');

    Route::get('{modelo:codigo}/variante_forma', 'FichaController@varianteForma')->name('variante_forma');
    Route::get('{modelo:codigo}/{codigo}/detalle_forma', 'FichaController@detalleVarianteForma')->name('detalle_forma');

    Route::get('{modelo:codigo}/variante_decorativa', 'FichaController@varianteDecorativa')->name('variante_decorativa');
    Route::get('{modelo:codigo}/{codigo}/detalle_decorativa', 'FichaController@detalleVarianteDecorativa')->name('detalle_decorativa');

    Route::get('{modelo:codigo}/piezas_clave', 'FichaController@piezasClave')->name('piezas_clave');

    Route::get('{modelo:codigo}/variante_arqueometrica', 'FichaController@varianteArqueometrica')->name('variante_arqueometrica');
    Route::get('{modelo:codigo}/{codigo}/detalle_arqueometrica', 'FichaController@detalleVarianteArqueometrica')->name('detalle_arqueometrica');
});

Route::prefix('noticias')->name('noticias.')->group(function () {
    Route::get('/', 'NoticiasController@noticias')->name('noticias');
    Route::get('/{contenido}/noticia', 'NoticiasController@verNoticia')->name('ver_noticia');
});

Route::prefix('talleres_virtules')->name('talleres_virtules.')->group(function () {
    Route::get('/', 'TallerVirtualController@tallerres')->name('talleres_virtules');
    Route::get('/{contenido}/taller_virtual', 'TallerVirtualController@verNoticia')->name('ver_talleres_virtules');
});

Route::prefix('como_usar_calalogo')->name('como_usar_calalogo.')->group(function () {
    Route::get('/', 'ComoUsarCatalogoController@usarCatalogo')->name('como_usar_calalogo');
});