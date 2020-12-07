@extends('dashboard')
@section('title', 'Blog Yazısı Ekle')
@section('content')

<div class="container">
    <h2>Yeni Blog Ekle</h2>
    <form method="post" action="{{route('blog.save')}}">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Blog Başlığı:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">İçerik:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
        </div>
    </form>
</div>
@endsection
