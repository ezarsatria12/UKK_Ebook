<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class AddBookController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dasboard.book');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('dasboard.book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahunterbit'=>'required',
            'gambar'=>'required|image|file'
        ]);
        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('post-gambar');
        }
        Book::create($validatedData);
        return redirect('/dasboard');
    }

    
}
