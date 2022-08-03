@extends('layouts.app')

@section('page_title')
@endsection


@section('page_content')
<h1 class="text-center">Comics create</h1>
<div class="container">
    <form action="{{ route('comics.create') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="title" class="form-control" id="exampleFormControlInput1">
        </div>
        <form>
            <div class="upload-img mt-3">
                <label for="exampleFormControlFile1">Upload</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Description</label>
            <input type="description" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="price" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Series</label>
            <input type="series" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Sale Date</label>
            <input type="saleDate" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Type</label>
            <input type="type" class="form-control" id="exampleFormControlInput1">
        </div>

        <a href="{{route('comics.index')}}">
            <button class="send mt-3">Send</button>
        </a>
    </form>
</div>

<style>
    .send {
        background-color: lightsalmon
    }
</style>