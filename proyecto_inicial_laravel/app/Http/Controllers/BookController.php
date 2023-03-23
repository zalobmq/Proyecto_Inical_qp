<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(): Renderable
    {
        $book = Book::paginate();
        return view('vistaBooks2', compact('book'));
    }
/* Añadir */
    public function create(): Renderable
    {
        $book = new Book;
        $title = __('Registrar libro');
        $action = route('books.store');
        $buttonText = __('Guardar libro');
        return view('form', compact('book', 'title', 'action', 'buttonText'));
    }

    public function store(Request $request): RedirectResponse
    {
       
        Book::create([
            'title' => $request->string('title'),
            'description' => $request->string('description'),
        ]);
        
        return redirect()->route('books.index');
    }
    /* Borrar */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('books.index');
    }

    /* ACTUALIZAR */

    public function edit(Book $book): Renderable
    {
        $title = __('Editar libro');
        $action = route('books.update', $book);
        $buttonText = __('Actualizar libro');
        $method = 'PUT';
        return view('formEditar', compact('book', 'title', 'action', 'buttonText', 'method'));
    }
    public function update(Request $request, Book $book): RedirectResponse
    {
       /*  $request->validate([
            'title' => 'required|unique:projects,name,' . $book->id . '|string|max:100',
            'description' => 'required|string|max:1000',
        ]); */
        $book->update([
            'title' => $request->string('title'),
            'description' => $request->string('description'),
        ]);
        
        return redirect()->route('books.index');
    }
}
