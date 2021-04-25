@extends('base')

@section('content')
    <div class="max-w-7xl flex flex-col justify-center items-center flex-wrap">

        <img src="/storage/{{ $projet->image }}" alt="" class="md:max-w-3xl max-h-96 m-0">

        <style>
            img {
                text-align: center;
                margin: 2rem;
                display: inline;
            }

            p {
                margin-bottom: 1rem;
            }
        </style>

        <div class="mt-20 max-w-4xl flex flex-col flex-wrap flex-shrink justify-center items-center">
            <h2 class="text-8xl mb-5">{{ $projet->titre }}</h2>
            {!! $projet->contenu !!}
        </div>

    </div>
@stop
