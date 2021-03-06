@extends('layouts.index')

@section("content")
<x-section title="{{ucfirst($collection->name)}}">
    <div class="row">
      @foreach($collection->products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 py-2 px-2 ">
            @include("components.product-card", ["product"=>$product])
        </div>
      @endforeach
    </div>
  </x-section>

@endsection