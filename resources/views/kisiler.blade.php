@extends('dashboard')
@section('title', 'Hakkımda')
@section('content')

<div class="container">
    <h2>Kullanıcı Bilgileri</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Adı</th>
            <th>Email</th>
            <th>Şifre</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
