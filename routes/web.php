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

use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use \App\Http\Controllers\EstudanteController;
use \App\Http\Controllers\DocenteController;
use \App\Http\Controllers\DisciplinaController;
use \App\Http\Controllers\TurmaController;
use \App\Http\Controllers\CursoController;
use \App\Http\Controllers\AvaliacaoController;


Route::get('/',[\App\Http\Controllers\CasaController::class,"index"]);
Route::get('/listing',[\App\Http\Controllers\CasaController::class,"casas"]);
Route::get('/details/{id}',[\App\Http\Controllers\CasaController::class,"detalhes"]);
Route::post('/contacto',[\App\Http\Controllers\ContactoController::class,"store"]);
Route::get('/profile', function () {
    return view('general.profile');
});

Route::get('/qr', function () {
//    \QrCode::size(500)
//        ->format('png')
//        ->generate('codingdriver.com', public_path('images/qrcode.png'));
    return view('qr');
});

Route::get('/login', function () {
//    \QrCode::size(500)
//        ->format('png')
//        ->generate('codingdriver.com', public_path('images/qrcode.png'));
    return redirect('/admin');
});




Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function (){
//    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name("dashboard");
//    Route::resource('/role', RoleController::class);
//    Route::resource('/permission', PermissionController::class);
//    Route::resource('/estudantes', EstudanteController::class);
//    Route::resource('/docentes', DocenteController::class);
//    Route::resource('/igrejas', \App\Http\Controllers\IgrejaController::class);
//    Route::resource('/cultos', \App\Http\Controllers\CultoController::class);
//    Route::resource('/agendamentos', \App\Http\Controllers\AgendamentoController::class);

});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
