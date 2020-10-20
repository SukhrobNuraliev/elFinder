@extends('layouts.master')

@section('title', 'Create a new Folder')
    
@section('content')

<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4">Create a new Folder</h1>
        <hr class="my-4">
        <form action="{{route('newFolder.store')}}" method="post">
            @csrf
            <div class="form-row text-center">

                <div class="col-12 col-sm-12 col-md-6 mb-2">
                    <select required name="box" id="box" class="form-control-lg shadow rounded" style="width: 400px">
                        <option value="" selected>Box number</option>
                        @foreach ($boxes as $box)
                            <option value="{{ $box->id }}">{{ $box->id }}</option>
                        @endforeach 
                    </select>
                </div>

                <div class="col-12 col-sm-12 col-md-6">
                    <button type="submit" class="btn btn-success btn-lg btn-block shadow p-3 rounded">Create</button>
                </div>
            </div>
          </form>
        <a class="mt-2 float-right btn btn-danger btn-lg shadow rounded" href="{{route('shelf.index')}}">Cancel</a>

      </div>
</div>
    
<div class="row">
    <div class="col-12 text-center">
        <div class="item">
            <div class="tab">id</div>
        </div>
    </div>
</div>

@endsection