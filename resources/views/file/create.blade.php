@extends('layouts.master')

@section('title', 'Create a new File')
    
@section('content')

<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4">Create a new File</h1>
        <hr class="my-4">
        <form action="{{route('newFile.store')}}" method="post">
            @csrf

            <div class="row mb-5">
                <div class="col-6">
                    <div class="form-group">
                        <input name="name" required type="text" class="form-control shadow-sm rounded" placeholder="Name of File">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <textarea name="content" required class="form-control shadow-sm rounded" rows="5"  placeholder="Content of File"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-row text-center">
                <div class="col-12 col-sm-12 col-md-6 mb-2">
                    {{-- {{dd($folder->id)}} --}} 
                    @isset($folder->id)
                    <input type="hidden" name="folder" value="{{$folder->id}}">
                    @endisset

                    
                    @empty($folder->id)
                    <select required name="folder" class="form-control-lg shadow rounded" style="width: 400px">
                        <option value="" selected>Folder number</option>
                        @foreach ($folders as $folder)
                        <option value="{{ $folder->id }}">{{ $folder->id }}</option>
                        @endforeach 
                    </select>
                    @endempty

                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <button type="submit" class="btn btn-success btn-lg btn-block shadow p-3 rounded">Create</button>
                </div>
            </div>
          </form>

          {{-- {{dd($box)}} --}}
          @isset($box->id)
             <a class="mt-2 float-right btn btn-danger btn-lg shadow rounded" href="{{route('folder.show', ['box' => $box->id, 'folder' => $folder->id])}}">Cancel</a>
          @endisset

          @empty($box->id)
              <a class="mt-2 float-right btn btn-danger btn-lg shadow rounded" href="{{route('shelf.index')}}">Cancel</a>
          @endempty


      </div>
</div>
    
<div class="container text-center">
    <div class="row">
    <div class="col-12">
        <div class="paper document" style="width: 50%">
            <header>
              <h1>Id</h1>
            </header>
            <h2>Name</h2>
            <hr>
            <p>Content</p>
       </div>
    </div>
    </div>
</div>

@endsection