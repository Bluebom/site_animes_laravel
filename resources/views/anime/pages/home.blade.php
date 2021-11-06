@extends('anime.app')
@section('title', 'Franklin Henrique')
@section('content')
    <nav class="mt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <div class="row gap-3">
        @foreach ($animes as $anime)
            <div class="card" style="width: 23%">
                <img src="{{ $anime->img }}" class="card-img-top pt-3 rounded" style="max-height: 150px" alt="Jotaro imagem">
                <div class="card-body">
                    <div class="row">
                        <h3>{{ $anime->name }}</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="col-12 text-end">{{ $anime->stars }} <i class="far fa-star"></i></p>
                        <a href="{{ route('animes.show', $anime) }}"><button
                                class="btn btn-success col-12">assitir</button></a>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-lg-3 col-md-6 col-sm-12" style="position: relative;">
            <div class="card-body text-center">
                <a href="#" class="text-success fs-1" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%);"><i class="fas fa-plus-circle"></i></a>
            </div>
        </div>

    </div>
@endsection
