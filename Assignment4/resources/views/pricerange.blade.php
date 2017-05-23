@extends('master')

@section('content')

<h2>
  Här är alla mobiler inom din utsatta prisklass.
</h2>
<h3>
  Prisklass: {{$min}} kr -> {{$max}} kr
</h3>
<ul>
  @foreach ($products as $product)
@if( $product->price >= $min and $product->price <= $max)
  <li style="clear:both;"><a href="products/{{ $product->id }}">{{ $product->title }}</a> ({{ $product->price }} kr)

  </li>
@endif
  @endforeach
</ul>

@endsection
