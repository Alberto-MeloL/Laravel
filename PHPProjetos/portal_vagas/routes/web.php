<?php
// porque não fecha

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\InscricaoController;
use App\Http\Middleware\VagaMiddleware;
use App\Models\Inscricao;

// Rota para exibir a homePage
Route::get('/',function(){return view('home');});


// Rota para exibir o formulário de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->
name('usuarios.login');


// Rota para processar o login
Route::post('/login', [UsuarioController::class, 'login'])->
name('usuarios.login');


// Rota para exibir o formulário de registro
Route::get('/registro', [UsuarioController::class, 'showRegistroForm'])->
name('usuarios.registro');


// Rota para processar o registro
Route::post('/registro', [UsuarioController::class, 'registro'])->
name('usuarios.registro');


// Rota para logout
Route::post('/logout', [UsuarioController::class, 'logout'])->
name('usuarios.logout');


// Rota para o dashboard, protegida por autenticação
// Route::get('/dashboard', function () {
//     return view('usuarios.dashboard');
// })->middleware('auth')->name('dashboard');

Route::get('/dashboard', [ControllerDashboard::class, 'index'])->middleware('auth')->name('dashboard');

Route::resource('/vagas', VagaController::class)->middleware(VagaMiddleware::class);

// para que serve o class

Route::post('inscricao/add/{vaga}', [InscricaoController::class, 'add'])->middleware('auth')->name('inscricao.add');
Route::get('vagas/.{vaga}', [VagaController::class])
