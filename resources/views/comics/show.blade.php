@extends('layouts.app')

@section('page_title', 'Comic #' . $comic->id)


@section('page_content')
    <h2>{{$comic->title}}</h2>
    <div>{{$comic->description}}</div>
    
    <ul>
        <li>Created: {{$comic->created_date}}</li>
        <li>Last modified: {{$comic->last_modified}}</li>
    </ul>
@endsection