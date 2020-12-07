@extends('dashboard')
@section('title', 'Kategori Ekle')
@section('content')


<div class="row">
    <div class="col-lg-3">
        <form method="post" action="{{route('category.save')}}">
            @csrf
            <div class="form-group">
              <label for="text">Kategori Adı</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
          </form>
        <br>

        <form action="{{route('category.import')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <input type="submit" value="Yükle">
        </form>
    </div>
</div>

@endsection
