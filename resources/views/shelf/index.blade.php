@extends('layouts.master')

@section('title', 'elFinder - Organize Files')
    

@section('content')

        <div class="mb-3">
            <h1 class="text-center">elFinder</h1>
        </div>

        <div class="container">
            <div class="jumbotron panel shadow" style="padding: 1rem 1rem; margin-bottom:3rem">
                    
                <div class="form-row">
                    <form class="col-12 col-sm-7" method="POST" action="{{route('search.post')}}">
                        @csrf
                        <div class="form-row ">
                            <div class="col align-middle">
                                <input required name="folderId" class="form-control form-control-lg shadow" type="number" placeholder="Folder Number">
                            </div>
                            <div class="col align-middle">
                                <button type="submit" class=" btn btn-warning btn-lg shadow rounded">Find</button>
                            </div>
                        </div>
                    </form>

                    <div class="col-12 col-sm-5">
                        <a href="{{route('folder.create')}}" class="btn btn-success btn-lg shadow rounded mt-1">New Folder</a>
                        <a href="{{route('newFile.create')}}" class="btn btn-success btn-lg shadow rounded mt-1">New File</a>
                    </div>
                </div>


                {{-- <div class="float-right"> --}}
                    {{-- <a class="btn btn-success btn-lg shadow rounded">New File</a> --}}
                {{-- </div> --}}
            </div>
        </div>

        <div style="padding: 0 1.5rem">
            <div class="row">

                @foreach ($shelves as $shelf)
                    
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="cabinetx">
                        <div class="head mb-4">
                            <label class="text-white text-center">{{$shelf->id}}</label>
                        </div>

                        @foreach ($boxes as $box)
                            @if ($box->shelf_id == $shelf->id)
                                
                            <a href="{{route('box.show', ['box' => $box->id])}}">
                                <div class="drawer mb-2">
                                    <div class="wrapper">
                                        <label class="text-center">{{$box->id}}</label>
                                        <div class="handle"></div>
                                    </div>
                                    <div class="files"></div>
                                </div>
                            </a>

                            @endif
                        @endforeach

                    </div>
                </div>

                @endforeach

            </div>
        </div>

<div class="text-center">
    <p>@ Sukhrob Nuraliev</p>
</div>

@endsection