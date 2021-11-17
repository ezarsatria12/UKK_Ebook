<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'penerbit',
        'tahunterbit',
        'gambar'
    ];
    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'judul',
        'penulis',
        'penerbit',
        'tahunterbit',
        'gambar'
    ];
    
}
