@extends("layouts.app")

@section("page-title")

@section("main-content")
<h1>Passengers</h1>

<div class="row justify-content-center">
    @foreach ($passengers as $passenger )

    <div class="card col-2  m-3">
        <div class="card-body">
          <h5 class="card-title">Nome Passeggero: {{$passenger->first_name}}</h5>
          <h5 class="card-title">Cognome Passeggero: {{$passenger->last_name}}</h5>
          <h5 class="card-title">Data di nascita: {{$passenger->date_of_birth}}</h5>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection
