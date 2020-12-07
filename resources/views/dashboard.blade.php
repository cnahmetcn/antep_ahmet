<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Ahmet Can</a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="{{route('anasayfa')}}">Kişiler</a></li>
                <li><a href="kisi-ekle">Kişi Ekle</a></li>
                <li><a href="satis">Satışlar</a></li>
                <li><a href="{{route('product.show')}}">Product Ürünler</a></li>
                <li><a href="{{route('product.create')}}">Product Ürün Ekle</a></li>
                <li><a href="{{route('category.show')}}">Kategoriler</a></li>
                <li><a href="{{route('category.create')}}">Kategori Ekle</a></li>
                <li><a href="{{route('sliders.show')}}">Sliders</a></li>
                <li><a href="{{route('blog.create')}}">Blog Ekle</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/ogani"><span></span>Ogami</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Kayıt ol</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Giriş Yap</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

</body>

</html>
