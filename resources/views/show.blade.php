@extends('master')

@section('content')

<h1>{{ $product->title }}</h1>
<p> Märke: {{ $product->brand }}</p>
<p>
  Pris: {{ $product->price }} kr
</p>
<img src="{{ $product->image }}" alt="{{ $product->title }}">
<p>
  {{ $product->description }}
</p>



<p>
  Finns i dom här butikerna: <br />
  @foreach($product->stores as $store)
      {{ $store->name }}, {{ $store->city }}
      <br />
  @endforeach

</p>

<p>
  Kommentarer från användare: <br />
  @foreach($product->reviews as $review)
    Name: {{ $review->name }} <br /> Kommentar: {{ $review->comment }} <br /> Betyg: {{ $review->grade }}<br />
    ____________________________________________________________________________
    <br />
  @endforeach
</p>
<h3 style="clear:both;">
@if($product->id != 1)
<a style="float:left" href="{{ $product->id -1 }}"> Previous Phone</a>

@endif
@if($product->id <= $length)
<a style="float:right" href="{{ $product->id +1 }} "> Next Phone</a>

</h3>
@endif


@endsection
