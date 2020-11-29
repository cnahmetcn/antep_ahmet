@extends('dashboard')
@section('title', 'Ürünler')
@section('content')

<div class="container">
    <h2>Ürünler</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Ürün Adı</th>
            <th>Fiyat</th>
            <th>Açıklama</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $p)
            <tr>
                <td>{{$p->name}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
