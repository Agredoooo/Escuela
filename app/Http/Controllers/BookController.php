<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Book;
use App\Models\Example;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function Elokuent(){
       
   
        $user = User::find(3);
        return $user;
   }
   public function index()
    {
        $libros = Book::orderBy('id', 'asc')->get();
        return view('Quiz.listar', compact('libros'));
    }

    public function create()
    {
        return view('Quiz.create');
    }

    public function store(Request $request)
    {
        $libro = new Book();
        $libro->Titulo = $request->Titulo;
        $libro->ISNB = $request->ISNB;
        $libro->Editorial = $request->Editorial;
        $libro->Paginas = $request->Paginas;
        $libro->save();

        return redirect()->route('Quiz.index');
    }

    public function show(Book $libro)
    {
        return view('Quiz.show', compact('libro'));
    }

    public function destroy(Book $libro)
    {
        $libro->delete();
        return redirect()->route('Quiz.index');
    }

    public function edit(Book $libro)
    {
        return view('Quiz.edit', compact('libro'));
    }

    public function update(Request $request, Book $libro)
    {
        $libro->Titulo = $request->Titulo;
        $libro->ISNB = $request->ISNB;
        $libro->Editorial = $request->Editorial;
        $libro->Paginas = $request->Paginas;
        $libro->save();

        return redirect()->route('Quiz.index');
    }
}