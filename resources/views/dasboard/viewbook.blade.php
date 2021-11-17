@extends('dasboard.layout.main')

@section('container')
  <div class="d-flex justify-content-center flex-warp flex-md-nowarp align-item-center pt-3 pb-2 md-3 border-bottom">
    <h2>View</h2>
  </div>
  <div class="row my-4">
    <div class="col-sm-6">
      <img src="{{ asset('storage/'.$book->gambar)}}" class="img-view" alt="...">
    </div>
    <div class="col-sm-6">
      <h2>Judul:</h2>
      <h5>{{$book->judul}}</h5>
      <h4>Pengarang:</h4>
      <h5>{{$book->penulis}}</h5>
      <h4>Penerbit:</h4>
      <h5>{{$book->penerbit}}</h5>
      <h4>Tahun Terbit:</h4>
      <h5>{{$book->tahunterbit}}</h5>
    </div>
  
  </div>
  
  
@endsection