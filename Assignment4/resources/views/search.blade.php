@extends('master')

@section('content')

<h1>Sök efter prisklass</h1>

<form action="/pricerange" method="get">
<div class="form-group">
  <label>Min value</label>
  <input type="text" class="form-control" id="MinValue" name="MinValue" placeholder="Skriv min value här...">
</div>
<div class="form-group">
  <label>Max value</label>
  <input type="text" class="form-control" id="MaxValue" name="MaxValue" placeholder="Skriv max value här...">
</div>

<input type="submit" value="Search" class="btn btn-success">
</form>

@endsection
