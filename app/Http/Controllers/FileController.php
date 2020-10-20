<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Box $box, Folder $folder)
    {
        return view('file.create', [
            'folders' => Folder::orderBy('id')->get(),
            'box' => $box,
            'folder' => $folder,
        ]);
    }

    /*
     * 
     return view('file.create', [
    'folders' => Folder::orderBy('id')->get(),
     'folder' => $folder,
     ]); 
     * 
     */



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        File::create([
            ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function newStore(Request $request)
    {
        File::create([
            'name' => $request->name,
            'content' => $request->content,
            'folder_id' => $request->folder,
        ]);

        $folderModel = Folder::where('id', $request->folder)->first();
        $boxId = $folderModel->box->id;
        // dd($boxId);

        return redirect()->route('folder.show', ['box' => $boxId, 'folder' => $request->folder]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(Box $box, Folder $folder, File $file)
    {
        // dd($file);
        return view('file.show', [
            'box' => $box,
            'folder' => $folder,
            'file' => $file,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
