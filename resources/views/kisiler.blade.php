@extends('dashboard')
@section('title', 'Kişiler')
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
                <td>
                <input type="password" id="pwd" value="{{$user->password}}" name="pswd">

                <a href="{{route('forgotPassword')}}" class="btn btn-warning">Şifremi Unuttum</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $users->links() !!}
    </div>

</div>



@endsection
