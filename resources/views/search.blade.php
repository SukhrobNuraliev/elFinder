@extends('layouts.master')

@section('title', 'Main')
    

@section('content')

        <div class="mb-5">
            <h1 class="text-center">Archive Cabinets</h1>
        </div>

        <div class="container">
            <div class="jumbotron panel" style="padding: 1rem 1rem;">
                    
                <div class="form-row">
                    <form class="col-12 col-sm-7" method="POST" action="{{route('search')}}">
                        @csrf
                        <div class="form-row ">
                            <div class="col align-middle">
                                <input required name="folderId" class="form-control form-control-lg shadow" type="number" placeholder="Folder Number">
                            </div>
                            <div class="col align-middle">
                                <button type="submit" class=" btn btn-warning btn-lg shadow rounded">Find</button>
                                <a href="{{route('shelf.index')}}" class="btn btn-danger btn-lg shadow rounded ml-4">All</a>
                            </div>
                        </div>
                    </form>

                    <div class="col-12 col-sm-5">
                        <a class="btn btn-success btn-lg shadow rounded mt-1">New Folder</a>
                        <a class="btn btn-success btn-lg shadow rounded mt-1">New File</a>
                    </div>
                </div>

            </div>
        </div>

        @isset($folder)
        <div class="text-center" style="margin:6rem 7rem">
            <div class="row">
                {{-- {{dd($folder)}} --}}
                <div class="col-md-12 col-lg-6 col-xl-4 text-center">
                    <a href="{{route('folder.show', ['box' => $folder->box->id ,'folder' => $folder->id])}}">
                        <div class="item">
                            <div class="tab">{{$folder->id}}</div>
                        </div>
                    </a>
                    <h4>Shelf: {{$folder->box->shelf->id}}</h4>
                    <h4>Box: {{$folder->box->id}}</h4>
                </div>
            </div>
        </div>
        @endisset

        @empty($folder)
        <div class="text-center" style="margin:6rem 7rem">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-4 text-center">
                    <h4>No Folder Found.</h4>
                </div>
            </div>
        </div>
        @endempty


@endsection