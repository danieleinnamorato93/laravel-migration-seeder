@extends("layouts.app")

@section("page-title")

@section("main-content")
<h1>Tickets:</h1>
{{--   $table->decimal("price",4,2);
            $table->string("seat_number");
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");
            $table->timestamps();
--}}

<div class="row justify-content-center">
    @foreach ($tickets as $ticket )

    <div class="card col-2  m-3">
        <div class="card-body">
          <h5 class="card-title">Prezzo: {{$ticket->price}}</h5>
          <h5 class="card-title">Posto numero: {{$ticket->seat_number}}</h5>
          <h5 class="card-title">Partenza: {{$ticket->departure_time}}</h5>
          <h5 class="card-title">Arrivo: {{$ticket->arrival_time}}</h5>
       
         
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection
