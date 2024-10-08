@extends('layout')

@section('content')
<h1>Login User</h1>
<form action="{{route('login')}}" method="POST">
    @csrf
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

@stop