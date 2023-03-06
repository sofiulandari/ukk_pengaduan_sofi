<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/tanggapan/update/{{ $tanggapan->id_tanggapan }}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>ID Pengaduan</label>
                            <input type="text" name="id_pengaduan" class="form-control" placeholder="pengaduan .." value=" {{ $tanggapan->id_pengaduan }}">
 
                            @if($errors->has('id_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tgl_tanggapan" class="form-control" placeholder="tanggal .." value=" {{ $tanggapan->tgl_tanggapan }}">
 
                            @if($errors->has('tgl_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nik</label>
                            <input type="text" name="nik" class="form-control" placeholder="nik .." value=" {{$tanggapan->nik }}">
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder="tanggapan"> {{ $tanggapan->tanggapan }} </textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>