@extends('dashboard')
@section('title', 'Şifremi Unuttum')
@section('content')


<div class="row">
    <div class="col-lg-3">
        <form class="Inputs" action="{{route('sendPassword')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="text">Telefon Numaran</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
          </form>
          <p>Telefon numaranızı başında 0 olmadan giriniz 5xx xxx xx xx</p>
        <br>
    </div>
</div>

@endsection
