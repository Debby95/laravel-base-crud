@extends('layouts.app')

@section('page_title')
    <h1 class="text-center">Comics List</h1>
@endsection


@section('page_content')

<div>
    <a href="{{route('comics.create')}}">
        <button class="add">ADD</button>
    </a>
    
</div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Description</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>Type</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <thead>
                    <tr>
                        <td>{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td><a href="{{route('comics.show', $comic->id)}}"><button class="show">Show</button></a></td>
                    </tr>
                </thead>
                
            @endforeach
        </tbody>
    </table>
@endsection

<style>
    .add {
        background-color: darkseagreen;
    }

    .show {
        background-color: lightskyblue;
    }
</style>