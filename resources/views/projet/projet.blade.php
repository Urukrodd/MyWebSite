@extends('base')

@section('content')
    <img src="/storage/{{ $projet->image }}" alt="" class="md:max-w-3xl">
    <div class="projet mt-20 sm:max-w-3xl flex flex-col flex-wrap flex-shrink justify-center items-center">
        <h2 class="text-8xl mb-5">{{ $projet->titre }}</h2>
        {!! $projet->contenu !!}
    </div>
@stop
