@extends('layouts.mainpage')

@section('page-title', 'Homepage')

@section('main')
<main>
    
    <section>
        <h2 class="text-center my-4 mt-5">
            Dc Series
        </h2>

        <div class="container">
            <div class="row justify-content-center">
                
                @foreach ($comics as $singleComic)

                <div class="card-container">
            
                    <div class="card mb-3 text-center">

                        <div class="img-box">
                            <div class="overlay">
                                <small>
                                    {{ $singleComic['description'] }}
                                </small>
                            </div>
                                <img src="{{ $singleComic['thumb'] }}" class="card-img-top" alt="{{ $singleComic['thumb'] }}">
                                
                                <span class="price-ticket">
                                    {{ $singleComic['price'] }}
                                </span>
                        </div>
                            
                        <div class="card-body">

                            <h6 class="card-title">
                                {{ $singleComic['title'] }}
                            </h6>
                            <p class="card-text">

                                <strong>Series:</strong>
                                {{ $singleComic['series']}}

                                <br>

                                <strong>Type:</strong>
                                {{ $singleComic['type']}}
                            
                            </p>
                            
                        </div>
                      </div>
                </div>

                @endforeach

            </div>
        </div>


    </section>

</main>

@endsection