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

    <div class="container mt-5">
        <div class="row fs-4">
            <h1>{{$modul->judul}}</h1>
            <p>{{$modul->deskripsi}}</p><br>
            <p>{{$modul->isi}}</p><br>
            <h3>Soal</h3>
            <p>{{$modul->soal}}</p>

        </div>
        <a href="{{route('modul.index')}}" class="btn btn-secondary fs-4 mt-5">Kembali</a>
        <a href="{{route('modul.edit', ['modul'=>$modul])}}" class="btn btn-primary fs-4 mt-5">Edit data</a>
        <form action="{{route('modul.delete', ['modul'=>$modul])}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Hapus data">
        </form>

    </div>
</body>

</html>
