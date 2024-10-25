@extends("layouts.app")

@section("page-title")

@section("main-content")
<h1>Trains</h1>

{{-- @dd($trains);
 "id" => 1
"azienda" => ""Italo""
"stazione_di_partenza" => ""Roma Termini""
"stazione_di_arrivo" => ""Milano Centrale""
"data_di_partenza" => "2024-10-25"
"orario_di_partenza" => "21:28:03"
"codice_treno" => "'IT5678'"
"numero_carrozze" => 6
"in_orario" => 1
"cancellato" => 0
"data_odierna" => "2024-10-25"
"created_at" => "2024-10-08 17:28:13"
"updated_at" => "2024-09-03 17:28:13"--}}

<div class="row justify-content-center">
    @foreach ($trains as $train )

    <div class="card col-2  m-3">
        <div class="card-body">
          <h5 class="card-title">Azienda: {{$train["azienda"]}}</h5>
          <h5 class="card-title">Partenza da: {{$train["stazione_di_partenza"]}}</h5>
          <h5 class="card-title">In arrivo a: {{$train["stazione_di_arrivo"]}}</h5>
          <h5 class="card-title">Il giorno: {{$train["data_di_partenza"]}}</h5>
          <h5 class="card-title">Alle ore: {{$train["orario_di_partenza"]}}</h5>
          <h5 class="card-title">Codice del treno: {{$train["codice_treno"]}}</h5>
          <h5 class="card-title">Cancellato? {{$train["cancellato"]}}</h5>
          <h5 class="card-title">Oggi: {{$train["data_odierna"]}}</h5>
          <h5 class="card-title">Numero di carrozze: {{$train["numero_carrozze"]}}</h5>
          
        </div>
      </div>

@endforeach
    </div>
</div>
@endsection