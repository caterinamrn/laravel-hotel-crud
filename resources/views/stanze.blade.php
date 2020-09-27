@extends("layouts/main-layout")

@section("content")

<h1>Stanze</h1>
<ul>
  @foreach ($stanze as $stanza)
  <li>
    <a href="{{route('stanza-show', $stanza -> id)}}">
      <span>Numero stanza: {{$stanza -> room_number}}</span>
    </a>

   </li>
  @endforeach
</ul>
<h2><a href="{{route('stanza-create')}}">Nuova Stanza</a></h2>

  @endsection
