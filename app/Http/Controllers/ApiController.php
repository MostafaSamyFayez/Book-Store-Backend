<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;
use App\Library;
use App\Author;
use Auth;
use DB;

class ApiController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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

    public function createuser(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $password=\Hash::make($request->password);
        
        $user=new User();
        $user->name=$name;
        $user->email=$email;
        $user->password=$password;
        $user->save();
        $user->generateAccessToken();
      return response()->json(['data'=>$user]);
    }
    
    
     public function loginuser(Request $request)
    {
        //dd($request->all());
         $credentials =[
             'email'=>$request['email'],
             'password'=>$request['password'],];
         
         if(Auth::attempt($credentials)){
             $user=auth()->user();
             $user->generateAccessToken();
             return response()->json(['access_token'=>$user->access_token]);
         }
         return 'Failure';
    }
    
    
    public function createbook(Request $request)
    {   
        $name=$request->name;
        $author_id=$request->author_id;
        $description=$request->description;
        $book=new Book();
        $book->name=$name;
        $book->author_id=$author_id;
        $book->description=$description;
        $book->save();
        return 'Book Created !';
    }
    
    
    
     public function createlibrary(Request $request)
    {
        $name=$request->name;
        $location=$request->location;
        $library=new Library();
        $library->name=$name;
        $library->location=$location;
        $library->save();
        return 'Library Created !';
    }
    
    
       public function createauthor(Request $request)
    {
        $name=$request->name;
        $bio=$request->bio;
        $author=new Author();
        $author->name=$name;
        $author->bio=$bio;
        $author->save();
        return 'Author Created !';
    } 
    
    
    public function bookauthor()
    {
        $books=Db::table('books')
            
            ->join('authors','books.author_id','=','authors.id')
            ->select ('books.name as bookname','auhtors.name' as 'authname');
            ->get ();
        return response ()->json(['data'=>$books->toArray()]);
        
        
        
        
    }
    
    
    
    
    
    
    
}