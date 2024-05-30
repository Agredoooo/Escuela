<?php namespace 
App\Http\Controllers; 
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