@extends('dashboard')
@section('title', 'Satışlar')
@section('content')

    <div class="container">
        <h2>Satışlar</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Kişi Adı</th>
                <th>Ürün Adı</th>
                <th>Fiyat</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($satis as $s)
                <tr>
                    <td>{{$s->username}}</td>
                    <td>{{$s->productname}}</td>
                    <td>{{$s->price}} ₺</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection




