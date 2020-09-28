@extends("layouts/main-layout")

@section("content")

    <h1>Pagamento edit</h1>
    <form action="{{route('pagamento-update', $pagamento -> id)}}" method="post">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" value="{{$pagamento -> status}}">
      </div>
      <div class="form-group">
          <label for="price">Price</label>
          <input type="number" name="price" value="{{$pagamento -> price}}">
        </div>
        <br>
        <button type="submit">Update</button>
    </form>

  @endsection
