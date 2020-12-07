@extends('dashboard')
@section('title', 'Ürünler')
@section('content')

    <div class="container">
        <h2>Ürünler</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Ürün Adı</th>
                <th>Ürün Açıklaması</th>
                <th>Fiyat</th>
                <th>Alan Kişi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($product as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->description}}</td>
                    <td>{{$p->price}} ₺</td>
                    <td>{{$p->user[0]->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
<div class="form-group">
    <a class="btn btn-primary" href="{{route('product.export')}}">indir</a>
</div>
@endsection




