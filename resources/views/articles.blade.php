@extends('layout')

@section('content')
<h1 align="center">Articles List</h1>
<div class="card">
    
   {{--  <div class="alert alert-dismissible alert-success"> --}}
        
    {{-- <div class="col-sm-6">
        <a href="add_article" button class="btn btn-warning text-black">Add New</a>
      </div>
    </div> --}}
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($data as $key =>$item)
            <tr>
                <td>{{$item->s.no}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td><a href="/delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
                <a href="/edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
    <div>
        {{-- {{$data->links()}} --}}
    </div>
    @stop
   