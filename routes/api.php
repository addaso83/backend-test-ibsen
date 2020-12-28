<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categorias', 'CategoriasController@index');
Route::post('articulospublicados', 'ArticulosPublicadosController@obtenerArticulos');
//Route::get('articulospublicados', 'ArticulosPublicadosController@obtenerArticulos');
/*


Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');

200: OK. Código estandar de que todo ha ido bien y opción por defecto.
201: Object created. Muy útil para las operaciones de guardado.
204: No content. Cuando una acción se ejecuta con éxito, pero no hay contenido que devolver.
206: Partial content. Útil cuando se devuelven resultados paginados.
400: Bad request. Respuesta estándar cuando una petición no supera la validación.
401: Unauthorized. Autenticación requerida.
403: Forbidden. El usuario se ha autenticado, pero no tiene los permisos necesarios para realizar la acción.
404: Not found. Laravel lo devuelve automáticamente cuando no se encuentra un recurso.
500: Internal server error. Nunca debería retornarse este valor explícitamente, pero si algo inesperado falla, esta es la respuesta que recibirá el usuario.
503: Service unavailable. Bastante descriptivo por sí mismo. Nuestra aplicación tampoco debería devolver explícitamente este código.

*/