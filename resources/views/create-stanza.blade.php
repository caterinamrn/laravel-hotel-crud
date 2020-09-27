@extends("layouts/main-layout")

@section("content")

<h1>Aggiungi una stanza</h1>
<form action="{{ route('stanza-store') }}" method="post">
  @csrf
  @method('POST')

  <div class="form-group">
    <label for="room_number">Room number</label>
    <input type="text" name="room_number" value="">
  </div>
  <div class="form-group">
    <label for="floor">Floor</label>
    <select  name="floor">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="beds">Beds</label>
    <select name="beds">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
  </div>
  <br>
  <button type="submit"> Nuova Stanza</button>
</form>

  @endsection
