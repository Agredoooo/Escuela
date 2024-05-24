<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class CursoController extends Controller
{
  
public function consultasElokuent(){
     //$category = Category::find(1);

     //return $category->posts;

     $user = User::find(1);
     return $user->posts;





}



public function index(){

        $cursos = Curso::orderBy('id', 'desc')->get();
        return view('listar2', compact('cursos'));
        //return  $cursos;

}
   
   
public function create(){

    return view('Create');

}

public function store(Request $request){
    $curso= new Curso(); 
    $curso->name=$request->name;
    $curso->descripcion=$request->descripcion;
    $curso->save();
    return $curso;


}
public function show(Curso $curso) {
       
     
    return view('show', compact('curso'));

}
public function destroy(Curso $curso) {
    $curso->delete();
    return redirect()->route('curso.index');
}
public function edit (Curso $curso){

    return view('edit',compact('curso'));

}
public function update(Request $request,Curso $curso ){

    $curso->name = $request->name;
    $curso->descripcion = $request->descripcion;
    $curso->save();
    return redirect()->route('curso.index');

}

}