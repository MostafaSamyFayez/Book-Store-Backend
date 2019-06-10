<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LibraryBook;
use App\Book;
use App\Library;

class LibraryBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
           public function create()
    {
        $books=Book::get();
        $libraries=Library::get();
        return view('librarybook.librarybookform',compact('books','libraries'));
    }
    
    public function store(Request $request)
    {   
        $book_id=$request->book_id;
        $library_id=$request->library_id;
        $librarybook=new LibraryBook();
        $librarybook->book_id=$book_id;
        $librarybook->library_id=$library_id;
        $librarybook->save();
        return redirect('/librarybook/create');
    }
}
