<?php namespace 
App\Http\Controllers;

use App\Models\Book;
use App\Models\User_Example;
use Illuminate\Support\Facades\Route;

 /* 
 |-------------------------------------------------------------------------- 
 | Web Routes 
 |-------------------------------------------------------------------------- 
 | 
 | Here is where you can register web routes for your application. These 
 | routes are loaded by the RouteServiceProvider and all of them will 
 | be assigned to the "web" middleware group. Make something great! 
 | 
 */ Route::get('/', function () 
 { return view('welcome'); 
});


//Route::get('product/listar',[ProductsController::class,'index'])->name("curso.index");
//Route::get('product/create',[ProductsController::class,'create']);
//Route::post('product/store', [ProductsController::class,'store'])->name('product.store');


Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
Route::get('cursos/create',[CursoController::class,'create']);
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('destroy');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('edit');


//consultasElokuent
Route::get('consultas',[CursoController::class,'consultasElokuent']);
Route::get('consultas',[ModuleController::class,'consultasElokuent']);


Route::get('usuario/asociar_rol',[RoleUserController::class,'asociar']);
Route::post('usuario/asociar_rol/store',[RoleUserController::class,'store'])->name('role_user.store');


//ejercisios laravel 2
Route::get('camionero',[TruckTruckerController::class,'asociado']);
Route::post('camionero/store',[TruckTruckerController::class,'store'])->name('truck_trucker.store');


//Quiz biblioteca
Route::get('consultas/quiz',[BookController::class,'Elokuent']);
//Crud quiz
Route::get('Quiz/listar', [BookController::class, 'index'])->name('Quiz.index');
Route::get('create/quiz', [BookController::class, 'create']);
Route::post('Quiz/store', [BookController::class, 'store'])->name('Quiz.store');
Route::get('Quiz/{libro}', [BookController::class, 'show'])->name('show');
Route::put('Quiz/{libro}', [BookController::class, 'update'])->name('update');
Route::delete('Quiz/{libro}', [BookController::class, 'destroy'])->name('destroy');
Route::get('Quiz/{libro}/editar', [BookController::class, 'edit'])->name('edit');

//asociar
Route::get('usuario/asociar_libro', [UserExampleController::class, 'asociar']);
Route::post('usuario/asociar_libro/store', [UserExampleController::class, 'storse'])->name('Quiz.asocio');
