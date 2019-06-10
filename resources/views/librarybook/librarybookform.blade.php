@extends('layouts.app')
@section('content')
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" >
            {{$error}}
        </div>
    @endforeach
    @endif




<form method="post"
      action="{{url('/librarybook/store')}}">

@csrf
 
    
     <select class="custom-select" name="book_id">
    @foreach ($books as $book)
        <option value="{{$book->id}}">{{$book->name}}</option>
    @endforeach
    
    </select>
    
    <br/>
    
    <select class="custom-select" name="library_id">
    @foreach ($libraries as $library)
        <option value="{{$library->id}}">{{$library->name}}</option>
    @endforeach
    
    </select>
    
    <br/>
    <input type="submit" value="enter"/>
    
</form>
@endsection