<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class RecipeApiController extends Controller
{
    //
    public function index(){
        $books = Book::all();
        return response()->json([
            'sucess'=>true,
            'book_data'=>$books]
            , 200);
    }
    public function save(Request $request){
        $Book = New Book;

        try {
        $Book->name = $request->name;
        $Book->description = $request->description;
        $Book->main_ingredients = $request->main_ingredients;
        $Book->time_added = $request->time_added;
        $Book->cooking_duration = $request->cooking_duration;
        $Book->category_id = $request->category_id;
        $Book->image = "This Is File Dummy";
        $Book->save();
    } catch (\Exception $e){
        return response()->json(['error'=>$e->getMessage()],500);
    }

    return response()->  json([
        'sucess'=>true,
        'book_data'=>$Book
        ]);
    }
    public function update($id, Request $request){
        $bookToUpdate = Book::find($id);

        $bookToUpdate->name = $request->name;
        $bookToUpdate->description = $request->description;
        $bookToUpdate->main_ingredients = $request->main_ingredients;
        $bookToUpdate->save();

        return response()->json([
            'success'=>true,
            'message'=>'Recipe has been update succesfully',
            'new_recipe_data'=>$bookToUpdate
            ], 200);
    }
    public function delete($id){
        $book = Book::find($id);
        $book->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Recipe has been deleted succesfully'
        ],200);
    }
}
