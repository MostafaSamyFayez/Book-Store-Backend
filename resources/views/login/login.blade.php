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
      action="{{url('/auth/login/save')}}">

@csrf
    <input type="text" name="email"
           placeholder="Enter email"/>
    <br/>
    
    <input type="password" name="password"
           placeholder="Enter password"
           />
    <input type="submit" value="login"/>
    
</form>
@endsection