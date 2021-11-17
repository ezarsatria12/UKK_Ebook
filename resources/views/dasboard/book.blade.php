<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <body>
        <div class="folmulir">
            <h5 class="text-center mb-4">Input Buku</h5>
            <form class="form-card" action="/addbook" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Judul Buku<span class="text-danger"> *</span></label> <input class="@error('judul')
                        is_invalid
                    @enderror" type="text" id="judul" placeholder="" name="judul" autofocus required value="{{ old ('judul') }}"> </div>
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Penulis<span class="text-danger"> *</span></label> <input class="@error('penulis')
                        is_invalid
                    @enderror" type="text" id="penulis" placeholder="" name="penulis" autofocus required value="{{ old ('penulis') }}"> </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Penerbit<span class="text-danger"> *</span></label> <input class="@error('penerbit')
                        is_invalid
                    @enderror" type="text" id="penerbit"  placeholder="" name="penerbit" autofocus required value="{{ old ('penerbit') }}"> </div>
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Tahun Terbit<span class="text-danger"> *</span></label> <input class="@error('tahunterbit')
                        is_invalid
                    @enderror" type="number" id="tahunterbit"  placeholder="Tahun" name="tahunterbit" autofocus required value="{{ old ('tahunterbit') }}"> </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> 
                        <label class="form-control-label px-3">Pilih Gambar<span class="text-danger"> *</span></label>
                        <img class="img-preview img-fluid  col-sm-6" >
                        <div class="input-group">
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar" autofocus required value="{{ old ('gambar') }}" onchange="previewImage()">
                              </div>
                        </div> 
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">submit</button> </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function previewImage(){
            const gambar = document.querySelector('#exampleFormControlFile1');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(OFREvent){
                imgPreview.src = OFREvent.target.result;
            }
        }
        
    </script>
</body>
</html>
  
  
