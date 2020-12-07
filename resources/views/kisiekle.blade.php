@extends('dashboard')
@section('title', 'Kişi Ekle')
@section('content')


<div class="row">
    <div class="col-lg-3">
        <form method="post" action="{{route('kisiler.save')}}">
            @csrf
            <div class="form-group">
              <label for="text">Kişi Adı</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="text">Email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="text">Şifre</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
          </form>
        <br>

        <form action="{{route('kisiler.import')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <input type="submit" value="Yükle">
        </form>
    </div>
</div>

@endsection
