<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return View('dasboard.index', [
            'book' => Book::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($book)
    {
        $books = Book::find($book);
        return view('dasboard.viewbook',[
            'book' => $books
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($book)
    {
        $book = Book::find($book);
        return View('dasboard.edit', [
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$book)
    {
        $rules=[
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahunterbit'=>'required',
            'gambar'=>'required|image|file'
        ];
        
        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->gambar){
                Storage::delete($request->gambar);
            }
            
            $validatedData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Book::where('id', $book)
            ->update($validatedData);

        return redirect('/dasboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        if($book){
            Storage::delete($book);
        }
        Book::destroy($book);
        return redirect('/')->with('success', 
        'Data telah dihapus.'); 
    
    }
}
