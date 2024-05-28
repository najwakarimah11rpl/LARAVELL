<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi restoran</title>
    <link rel="stylesheet" href="{{ asset('boostrap/css/boostrap.min.css') }}">
    <style> 
    img{
        width: 300px;
    }
    </style>
</head>
<body>
    <h1>project aplikasi restoran</h1>
    <div class="container">
        <div class="mt-5">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a href="/"><img src="Picsart_24-01-18_09-07-34-497.jpg" alt="">logo</a>
                    <a href="#"><img src="{{ asset('gambar/logo/boostrap.') }}" alt=""></a>
                    <ul class="navbar-nav gap-5">
                        <li class="nav-item">cart</li>
                        <li class="nav-item"><a href="{{ url('register') }}">register</a></li>
                        <li class="nav-item">email</li>
                        <li class="nav-item">login</li>
                        <li class="nav-item">logout</li>
                    </ul>
                </div>
            </nav>
        </div> <div class="row">
            <div class="col-2">
                <ul>
                @foreach ($kategori as $kategori)
                <li class="list-group-item">{{ $kategori ->kategori}}</li>
                <li class="list-group-item"><a href="{{ url('show/'.$kategori->idkategori) }}">{{ $kategori ->kategori}}</a></li>
                @endforeach
                </ul>
                kategori
            </div> <div class="col-10">
                @yield('content')
                @yield('isi')
                content
            </div>
        </div> <div class="">
            footer
        </div>
    </div>

    <script src="{{ asset('boostrap/js/boostrap.min.js') }}">

    </script>
</body>
</html>