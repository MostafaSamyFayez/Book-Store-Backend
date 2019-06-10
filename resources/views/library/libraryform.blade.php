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
      action="{{url('/library/store')}}">

@csrf
    <input type="text" name="name"
           placeholder="Enter library name"/>
    <br/>
    
    <input type="text" name="location"
           placeholder="location"
           />
    <input type="submit" value="enter"/>
    
</form>
@endsection