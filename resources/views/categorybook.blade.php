@extends('partials.master')

@section('title', 'Home')

@section('contain')

    <div class="container d-flex flex-column align-items-center justify-content-center">
        <div class="w-50 d-flex align-items-center justify-content-left" style="background-color: grey; color:white; padding-left: 8px">
            <h4>Book List</h4>
        </div>

        <div class="card-container d-flex flex-wrap align-items-center justify-content-center">
            @foreach ($books as $buku)
            <div class="card" style="width: 18rem; height:35vw">
                <img src="/assets/{{ $buku->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $buku->title }}</h5>
                  <p class="card-text">{{ $buku->author }}</p>
                  <a href="/bookdetail/{{ $buku->id }}" class="btn btn-primary">Detail</a>
                </div>
              </div>

            @endforeach
        </div>

    </div>

@endsection
