@extends('dashboard')
@section('title', 'Sliders')
@section('content')

<div class="container">
    <h2>sliders</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Adı</th>
            <th>Resim</th>
            <th>İşlem</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sliders as $s)
            <tr>
                <td>{{$s->name}}</td>
                <td>{{$s->photo}}</td>
            <td><a class="btn btn-danger" href="/delete-slider/{{$s->id}}">Sil</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
