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
      action="{{url('/book/store')}}">

@csrf
    <input type="text" name="name"
           placeholder="Enter book name"/>
    <br/>
    
    <input type="text" name="description"
           placeholder="Enter book description"/>
    <br/>
     <select class="custom-select" name="author_id">
    @foreach ($authors as $author)
        <option value="{{$author->id}}">{{$author->name}}</option>
    @endforeach
    
    </select>
    <br/>
    <input type="submit" value="enter"/>
    
</form>
@endsection