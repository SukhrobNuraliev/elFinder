<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\File;
use App\Models\Folder;
use App\Models\Shelf;
use Illuminate\Http\Request;

class FolderController extends Controller
{

    public function search(Request $request)
    {
        $folderId = $request->folderId;

        // dd($folderId);

        return view('search', [
            'folder' => Folder::where('id', $folderId)->first(),
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('folder.index', [
            'folders' => Folder::orderBy('id')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('folder.create', [
            'shelves' => Shelf::orderBy('id')->get(),
            'boxes' => Box::orderBy('id')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Folder::create([
            'box_id' => $request->box,
        ]);

        return redirect()->back();
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function newStore(Request $request)
    {
        Folder::create([
            'box_id' => $request->box,
        ]);

        return redirect()->route('box.show', ['box' => $request->box]);
    }

 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function show(Box $box, Folder $folder)
    {
        return view('folder.show', [
            'files' => File::where('folder_id', $folder->id)->get(),
            'box' => $box,
            'folder' => $folder,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function edit(Folder $folder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Folder $folder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Folder $folder)
    {
        //
    }
}
