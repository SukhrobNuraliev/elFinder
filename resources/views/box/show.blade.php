@extends('layouts.master')

@section('title', 'Inside the Box')
    
@section('content')

<div class="container">
    <div class="jumbotron mt-2 panel" style="padding: 1rem 1rem;">
        {{-- <div class="float-left"> --}}
            <a href="{{route('shelf.index')}}" class="mt-2 btn btn-dark btn-lg shadow rounded">Back</a>
            <a href="{{route('shelf.index')}}" class="mt-2 ml-2 btn btn-danger btn-lg shadow rounded">Home</a>
        {{-- </div> --}}
        <div class="float-right">
            <form method="POST" action="{{route('folder.store')}}">
                @csrf
                <input type="hidden" name="box" value="{{$box->id}}">
                <button type="submit" class="mt-2 ml-2 btn btn-success btn-lg shadow rounded">New Folder</button>
            </form>
        </div>
    </div>
</div>


    
    <div class="text-center">
        
    <div class="wrapper-box">
        <div class="row">

            @foreach ($folders as $folder)

            <div class="col-md-12 col-lg-6 col-xl-4 text-center">
                <a href="{{route('folder.show', ['box' => $box->id ,'folder' => $folder->id])}}">
                    <div class="item">
                        <div class="tab">{{$folder->id}}</div>
                    </div>
                </a>
            </div>

            @endforeach

        </div>
    </div>

    </div>


@endsection