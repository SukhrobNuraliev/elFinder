@extends('layouts.master')

@section('title', 'Inside Folder')
    
@section('content')


<div class="folder">
  <div class="container">
    <div class="jumbotron mt-2 panel" style="padding: 1rem 1rem;">
            <a href="{{route('box.show', ['box' => $box->id])}}" class="mt-2 btn btn-dark btn-lg shadow rounded">Back</a>
            <a href="{{route('shelf.index')}}" class="mt-2 ml-2 btn btn-danger btn-lg shadow rounded">Home</a>
        <div class="float-right">
          <a href="{{route('file.create', ['box' => $box->id, 'folder' => $folder->id])}}" class="mt-2 ml-2 btn btn-success btn-lg shadow rounded">New File</a>
        </div>
    </div>
  </div>
<div class="wrapper-folder">
  <div class="row">
             
    @foreach ($files as $file)

    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
      <a href="{{route('file.show', ['box'=> $box->id, 'folder' => $folder->id, 'file' => $file->id])}}">
          <div class="paper document p-5">
                <header>
                  <h1>{{$file->id}}</h1>
                </header>
                <h2>{{$file->name}}</h2>
                <hr>
                <p>{{$file->content}}</p>
           </div>
        </a>
      </div>

    @endforeach



            
    </div>
</div>
</div>


@endsection