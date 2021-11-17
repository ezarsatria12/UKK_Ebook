@extends('dasboard.layout.main')

@section('container')
  <div class="flex-warp flex-md-nowarp align-item-center pt-3 pb-2 md-3 border-bottom">
    <div class="d-flex justify-content-center">
        <h2>dasboard</h2>
    </div>
  </div>
  <div class="container mx-auto mt-4">
      
    <div class="row">
        @foreach ( $book as $book )
        @csrf
            <div class="col-md-4">
            <div class="card " style="width: 18rem;" >
                <a href="/dasboard/{{ $book->id }}" metod="get">
                    <img src="{{ asset('storage/'.$book->gambar)}}" class="card-img-top" alt="...">
                </a>
        <div class="card-body">
            <h5 class="card-title">{{ $book-> judul}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $book-> penulis}}</h6>
            <p class="card-text">Buku {{ $book-> judul}} ditulis oleh {{ $book-> penulis}} dengan penerbit {{ $book-> penerbit}} diterbitkan pada tahun {{ $book-> tahunterbit}}</p>
            <div class="d-flex justify-content-end">
                <a  href="/dasboard/{{ $book->id }}/edit" method="get" class="btn  btn-warning mx-1"><i class=""></i> Edit</a>
                <form action="/dasboard/{{ $book->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn  btn-danger">Hapus</button>
                </form>
                <a href="#" metod="get" class="btn  btn-danger"><i class=""></i> Hapus</a>
            </div>  
        </div>
        </div>
        </div>
        @endforeach 
    </div>
</div>
@endsection
