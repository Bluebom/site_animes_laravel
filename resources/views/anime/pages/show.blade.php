@extends('anime.app')
@section('title', "$anime->name")
@section('content')
<nav class="mt-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('animes'); }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$anime->name}}</li>

    </ol>
</nav>
    <ul class="list-group">
@foreach ($anime->video as $video)
        <a href="#" class="btn btn-withe">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><strong>Ep.{{$video->position}}</strong> <i class="fas fa-chevron-right"></i> <u>{{$video->name}}</u></span> <i class="fas fa-play-circle fs-2"></i>
            </li>
        </a>
@endforeach
    </ul>
@endsection
