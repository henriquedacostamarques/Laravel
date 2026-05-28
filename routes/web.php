<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('calc');
});

Route::post('/calcular', function (Request $request) {

    $a = $request->input('a');
    $b = $request->input('b');
    $op = $request->input('op');

    $resultado = 0;

    if ($op == '+') $resultado = $a + $b;
    if ($op == '-') $resultado = $a - $b;
    if ($op == '*') $resultado = $a * $b;
    if ($op == '/') $resultado = $b != 0 ? $a / $b : 'Erro: divisão por zero';

    return view('calc', compact('resultado'));
});