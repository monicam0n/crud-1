<!DOCTYPE html>
<html lang="en">

<head>
    <title>TAMBAH DATA JURNAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <ul>

            </ul>
        </div>
    </nav>

    <div class="container mt-5 ">
        <div class="row">
            <h1>Edit Data Modul</h1>
            @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li class="alert alert-danger">
                    {{$error}}
                </li>
                @endforeach
            </ul>
            @endif
            <div class="col mt-5 fs-4">
                <form class="form fs-4" method="post" action="{{route('modul.update', ['modul'=>$modul])}}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 100px;" id="basic-addon1">Judul </span>
                        <input value="{{$modul->judul}}" type="text" name="judul" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 100px;" id="basic-addon1">Deskripsi</span>
                        <input value="{{$modul->deskripsi}}" type="text" name="deskripsi" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span style="width: 100px;" class="input-group-text">Isi</span>
                        <textarea   class="form-control" name="isi" rows="5" cols="50" aria-label="With textarea">{{$modul->isi}}</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span style="width: 100px;" class="input-group-text">Soal</span>
                        <textarea   class="form-control" name="soal" rows="5" cols="50" aria-label="With textarea">{{$modul->soal}}</textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
