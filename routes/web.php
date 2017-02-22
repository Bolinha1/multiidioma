<?php
use Illuminate\Http\Request;

Route::get('/idiomas', function () {
    return view('idiomas');
});

Route::get('/idiomas/{idioma}', function (Request $request) {
    $idioma = $request->route('idioma');
    app()->setLocale($idioma);
    $dados['mensagem'] = trans('conteudo.mensagem');
    return view('idiomas', $dados);
});