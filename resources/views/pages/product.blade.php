@extends('layouts.index')

@section('content')
  <div class="pt-4">
    <div class="container">
      <div class="row my-5">
        <div class="col-lg-6 col-md-12 mb-3 mb-md-0">
          <div class="productImages">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>

              <div class="carousel-inner">
                @foreach ($product->imagesList() as $i => $image_url)
                  <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                    <img src="{{ $image_url }}" class="d-block w-100" alt="Okay">
                  </div>
                @endforeach
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 text-center" data-id="{{ $product->id }}" data-name="{{ $product->name }}"
          data-price="{{ $product->price }}" data-available="{{ $product->available }}"
          data-description="{{ $product->description }}" data-images="{{ $product->imagesComma() }}">
          <mark class="text-muted font-monospace">{{ $product->brand }}</mark>
          <h1>{{ $product->name }}</h1>
          <div>
            <div class="border-bottom border-primary fw-light fs-2 my-3 d-inline-block">${{ $product->price }}</div>
          </div>
          <div class="text-success">Quantity in Stock: {{ $product->available }}</div>
          <div class="my-5">
            <button {{ $product->available == 0 ? 'disabled' : '' }} type="button"
              class="js-cart btn-primary btn-lg btn text-uppercase mb-3" data-added="Added to cart"
              data-default="add to cart"> {{ $product->available == 0 ? 'Unavailable' : 'add to cart' }}add to
              cart</button>
            <button type="button" class="btn-outline-secondary btn-lg btn text-uppercase mb-3 js-wishlist"
              data-added="Added to favorites" data-default="Add to favorites">add to
              favorites</button>
          </div>
          <p>
            {{ $product->description }}
          </p>
          <div class="d-flex justify-content-center align-items-center">
            <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-facebook fs-3"></i></a>
            <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-instagram fs-3"></i></a>
            <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-telegram fs-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
