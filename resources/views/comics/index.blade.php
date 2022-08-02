@extends('layouts.app')

@section('page_title')
    <h1>Comics List</h1>
@endsection

@section('page_content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
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
                    </tr>
                </thead>
            @endforeach
        </tbody>
    </table>
@endsection