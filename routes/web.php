<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);

// Rotas de login
Route::get('/login', ['as' => 'site.login', 'uses' => 'Site\loginController@index']);
Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses' => 'Site\loginController@entrar']);
Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'Site\loginController@sair']);

// Rotas de contato
Route::get('/contato', ['uses' => 'ContatoController@index']);
Route::post('/contato', ['uses' => 'ContatoController@criar']);
Route::put('/contato', ['uses' => 'ContatoController@editar']);

// Routes de cursos
// as são apelidos para as rotas
Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'Admin\CursoController@index']);

    // Routes para adicionar um curso
    Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses' => 'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar', 'uses' => 'Admin\CursoController@salvar']);

    // Routes para editar um curso
    Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses' => 'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar', 'uses' => 'Admin\CursoController@atualizar']);

    // Routes para atualizar um curso
    Route::get('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar', 'uses' => 'Admin\CursoController@deletar']);
});