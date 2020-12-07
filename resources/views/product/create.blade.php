@extends('dashboard')
@section('title', 'Ürün Ekle')
@section('content')

<div class="container">
    <h2>Yeni Ürün Ekle</h2>
    <form method="post" action="{{route('product.save')}}">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Ürün Adı:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Ürün Adı">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Açıklaması:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="description" id="description" placeholder="Açıklaması">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Fiyatı:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="price" id="price" placeholder="Fiyatı">
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Alıcı Adı</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>
    <form action="{{route('product.import')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit" value="Yükle">
    </form>
</div>
@endsection
