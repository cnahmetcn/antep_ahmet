@extends('dashboard')
@section('title', 'Kategoriler')
@section('content')

    <div class="container">
        <h2>Kategoriler</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Kategori Adı</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection




