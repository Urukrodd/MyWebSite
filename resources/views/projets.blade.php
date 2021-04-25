@extends('base')

@section('content')
    <div class="max-w-7xl flex flex-col justify-center items-center flex-wrap">

        <style>
            img {
                max-width: 100%;
                max-height: 100%;
            }
        </style>

        <h2 class="text-6xl">Professionnel</h2>
        <div class="mt-14 flex flex-row flex-wrap items-center justify-center">
            <div class="max-w-7xl flex flex-row justify-center items-center flex-wrap">
                @foreach($pros as $pro)
                    <a href="/projets/{{ $pro->id }}">
                        <div class="c-case m-4 p-6 rounded-2xl h-56 w-96 flex flex-row justify-center items-center shadow">
                            <img src="/storage/{{ $pro->image }}" alt="">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <h2 class="text-6xl mt-20">Personnel</h2>
        <div class="mt-14 flex flex-row flex-wrap items-center justify-center">
            <div class="max-w-7xl flex flex-row justify-center items-center flex-wrap">
                @foreach($persos as $perso)
                    <a href="/projets/{{ $perso->id }}">
                        <div class="c-case m-4 p-6 rounded-2xl h-56 w-96 flex flex-row justify-center items-center shadow">
                            <img src="/storage/{{ $perso->image }}" alt="">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <h2 class="text-6xl mt-20">École</h2>
        <div class="mt-14 flex flex-row flex-wrap items-center justify-center">
            <div class="max-w-7xl flex flex-row justify-center items-center flex-wrap">
                @foreach($ecoles as $ecole)
                    <a href="/projets/{{ $ecole->id }}">
                        <div class="c-case m-4 p-6 rounded-2xl h-56 w-96 flex flex-row justify-center items-center shadow">
                            <img src="/storage/{{ $ecole->image }}" alt="">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@stop
