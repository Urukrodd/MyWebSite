<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Maxime Bernard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

{{-- Header --}}
@include('navbar')
{{-- End Header --}}

{{-- Contenu de la page --}}
<div class="sm:mt-8 p-10 flex flex-col w-full h-full items-center content-center text-gray-500 smooth-scroll-wrapper">
    @yield("content")
</div>


<script src="https://unpkg.com/scrollreveal"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/scrollreveal.js') }}"></script>
</body>
</html>
