<?php

namespace App\Http\Controllers;
//we have use App\book, which allowed us to require the book model that we created earlier.
use App\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    // we've created the following five methods:

    public function lookupbook($id) //checks for a single book resource
    {
        return response()->json(book::find($id));
        //response() - global helper function that obtains an instance of the response factory
        //response()->json() - returns the response in JSON format
    }

    public function searchbook($name)//checks for a single book resource
    {     
 return response()->json(book::find($name));

    }

   public function create(Request $request)//creates a new book resource
    {
        $books = book::create($request->all());

        return response()->json($books, 201);
       //201 - HTTP status code that indicates a new resource has just been created
    }

 public function update($id, Request $request)//checks if a book resource exists and allows the resource to be updated
    {
        $books = book::findOrFail($id);
        $books->update($request->all());

        return response()->json($books, 200);
     //200 - HTTP status code that indicates the request was successful
    }

    public function delete($id) //checks if a book resource exists and deletes it
    {
        book::findOrFail($id)->delete();
        //findOrFail - throws a ModelNotFoundException if no result is not found
        return response('Deleted Successfully', 200);
    }
}