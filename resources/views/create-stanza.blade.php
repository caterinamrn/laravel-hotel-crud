@extends("layouts/main-layout")

@section("content")

<h1>Aggiungi una stanza</h1>
<ul>
  <li>Numero stanza: {{$stanza -> room_number}}</li>
  <li>Piano: {{$stanza -> floor}}</li>
  <li>Numero di letti: {{$stanza -> beds}}</li>
</ul>

  @endsection
