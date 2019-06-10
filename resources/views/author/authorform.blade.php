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
      action="{{url('/author/store')}}">

@csrf
    <input type="text" name="name"
           placeholder="Enter author name"/>
    <br/>
    
    <input type="text" name="bio"
           placeholder="bio"
           />
    <input type="submit" value="enter"/>
    
</form>
@endsection