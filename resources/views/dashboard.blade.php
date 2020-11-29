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
            <li><a href="hakkimda">Hakkımda</a></li>
            <li><a href="urunler">Ürünler</a></li>
            <li><a href="satis">Satışlar</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Kayıt ol</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Giriş Yap</a></li>
        </ul>
    </div>
</nav>

@yield('content')

</body>
</html>
