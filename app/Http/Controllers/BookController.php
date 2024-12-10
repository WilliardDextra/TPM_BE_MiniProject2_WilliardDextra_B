<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;

class BookController extends Controller
{
    public function welcome(){
        $books = Book::all();
        return view('welcome', compact('books'));
        // compact -> passing data
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|max:1000',
            'main_ingredients' => 'required|max:100',
            'time_added' => 'required|date',
            'cooking_duration' => 'required|gt:10',
            'image' => 'required|mimes:png,jpg'
        ]);

        $filePath = public_path('storage/images');
        $file = $request->file('image');
        $fileName = $request->title . '-' . $request->name . '-' . $file->getClientOriginalName();
        $file->move($filePath, $fileName);

        Book::create([
            // nama atribut => $request->nama input
            'name' => $request->name,
            'description' => $request->description,
            'main_ingredients' => $request->main_ingredients,
            'time_added' => $request->time_added,
            'cooking_duration' => $request->cooking_duration,
            'image' => $fileName,
            'category_id' => $request->category_name
        ]);

        Mail::to('user@gmail.com')->send(new MyEmail([
            'name' => $request->name,
            'description' => $request->description,
            'main_ingredients' => $request->main_ingredients,
            'time_added' => $request->time_added,
            'cooking_duration' => $request->cooking_duration,
        ]));

        return redirect(route('welcome'));
    }
    // -> mengakses sebuah atribut
    // => db

    public function createBook(){
        $categories = Category::all();
        return view('createBook', compact('categories'));
    }

    public function editBook($id){
        $book = Book::findOrFail($id);
        return view('editBook', compact('book'));
    }

    public function updateBook($id, Request $request){
        $book = Book::findOrFail($id);

        $book->update([
            'name' => $request->name,
            'description' => $request->description,
            'main_ingredients' => $request->main_ingredients,
            'time_added' => $request->time_added,
            'cooking_duration' => $request->cooking_duration,
        ]);
        return redirect(route('welcome'));
    }

    public function deleteBook($id){
        Book::destroy($id);

        // $book = Book::findOrFail($id);
        // $book->delete();
        return redirect(route('welcome'));
    }
}
