@extends('layouts.master')

@section('title', 'Document')
    
@section('content')

<div class="doc">

    <div class="container">
        <div class="jumbotron  panel" style="padding: 1rem 1rem;">
                <a href="{{route('folder.show', ['box' => $box->id, 'folder' => $folder->id])}}" class="mt-2 btn btn-dark btn-lg shadow rounded">Back</a>
                <a href="{{route('shelf.index')}}" class="mt-2 ml-2 btn btn-danger btn-lg shadow rounded">Home</a>
        </div>
    </div>


        <div class="row">
            <div class="col-12">

                <div class="paper1 document1">
                    <header>
                      <h1>{{$file->id}}</h1>
                    </header>
                    <h2>{{$file->name}}</h2>
                    <p>{{$file->content}}</p>
                    <hr>
                </div>

            </div>
        </div>
</div>


@endsection