<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOME</title>
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
                <li class="nav-item justify-content-end">
                    <a href="{{route('modul.create')}}" class="btn btn-primary ms-auto">Tambah Modul</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="row fs-4">
            <div class="col">
                @foreach ($moduls as $modul)
                <h2 class="mt-5">{{$modul->judul}}</h2>
                <h5>{{$modul->deskripsi}}</h5>
                <div class="fakeimg">Fake Image</div>
                <p>{{$modul->isi}}</p>
                <td><a class="btn btn-primary fs-4" href="{{route('modul.show', ['modul' => $modul])}}">Tampilkan Soal</a></td>
                @endforeach
            </div>
        </div>

        <div class="mt-5 p-4 bg-dark text-white text-center">
            <p>Footer</p>
        </div>

</body>

</html>
