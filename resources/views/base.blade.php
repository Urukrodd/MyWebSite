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
<header class="flex flex-wrap py-2">
    <div class="w-full px-4">
        <nav class="relative flex flex-wrap items-center justify-center px-2 py-3 rounded">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-center">
                <div class="w-full relative flex justify-center sm:w-auto px-4 lg:static lg:block lg:justify-start">
                    <h1 class="text-md font-bold leading-relaxed inline-block ml-4 py-2 whitespace-nowrap uppercase text-gray-500" href="#pablo">
                        Portfolio
                    </h1>
                    <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
                        <span class="block relative w-6 h-px rounded-sm bg-white"></span>
                        <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                        <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                    </button>
                </div>
                <div class="flex sm:flex-grow items-center" id="example-navbar-info">
                    <ul class="flex flex-col sm:flex-row list-none ml-auto">
                        <li class="nav-item">
                            <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-500 hover:opacity-75" href="#pablo">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-500 hover:opacity-75" href="#pablo">
                                Mes réalisations
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-500 hover:opacity-75" href="#pablo">
                                Me contacter
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
{{-- End Header --}}

{{-- Contenu de la page --}}
<div class="sm:mt-8 p-10 flex flex-col w-full h-full items-center content-center text-gray-500 smooth-scroll-wrapper">

    {{-- Présentation --}}
    <div class="flex flex-row justify-center items-center flex-wrap">
        <div class="mr-10">
            <h2 class="p-title text-7xl">Maxime Bernard</h2>
            <p class=" p-text max-w-xl">
                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
            </p>
        </div>
        <img src="img/maxime_photo.jpg" alt="" class="p-photo w-60 mt-6 rounded-full">
    </div>
    {{--  End Présentation  --}}

    {{-- Compétences --}}
    <div class="md:mt-52 mt-20 flex flex-col justify-center items-center flex-wrap">
        <h2 class="text-6xl">Mes compétences</h2>
        <div class="mt-14 flex flex-row flex-wrap items-center justify-center">
            <div class="c-case mt-6 p-6 mx-3 my-3 max-w-sm flex flex-col justify-center items-center rounded-md shadow bg-white">
                <img src="img/jetbrains.png" alt="" class="w-32 m-5">
                <p>
                    L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).
                </p>
            </div>

            <div class="c-case mt-6 p-6 mx-3 my-3 max-w-sm flex flex-col justify-center items-center rounded-md shadow bg-white">
                <img src="img/jetbrains.png" alt="" class="w-32 m-5">
                <p>
                    L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).
                </p>
            </div>

            <div class="c-case mt-6 p-6 mx-3 my-3 max-w-sm flex flex-col justify-center items-center rounded-md shadow bg-white">
                <img src="img/jetbrains.png" alt="" class="w-32 m-5">
                <p>
                    L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).
                </p>
            </div>

            <div class="c-case mt-6 p-6 mx-3 my-3 max-w-sm flex flex-col justify-center items-center rounded-md shadow bg-white">
                <img src="img/jetbrains.png" alt="" class="w-32 m-5">
                <p>
                    L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).
                </p>
            </div>

            <div class="c-case mt-6 p-6 mx-3 my-3 max-w-sm flex flex-col justify-center items-center rounded-md shadow bg-white">
                <img src="img/jetbrains.png" alt="" class="w-32 m-5">
                <p>
                    L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).
                </p>
            </div>

            <div class="c-case mt-6 p-6 mx-3 my-3 max-w-sm flex flex-col justify-center items-center rounded-md shadow bg-white">
                <img src="img/jetbrains.png" alt="" class="w-32 m-5">
                <p>
                    L'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).
                </p>
            </div>
        </div>
    </div>
    {{--  End Compétences  --}}

    {{-- Timeline --}}
    <div class="timeline mt-52 flex flex-col justify-center items-center">
        <h2 class="text-6xl">Mes experiences</h2>
        <div class="mt-10 relative flex flex-col justify-center items-center">
            <div class="h-line bg-gray-500 rounded">&nbsp;</div>
            <div class="leef3 absolute block w-leef p-4 text-center rounded-full text-white duration-200 shadow-lg">
                <p class="text-md"><span class="text-2xl">2018 : LYCÉE PASQUET ARLES</span><br>
                    Baccalauréat STI2D mention BIEN.</p>
            </div>
            <div class="leef2 absolute block w-leef p-4 text-center rounded-full text-white duration-200 shadow-lg">
                <p class="text-md"><span class="text-2xl">2018 - 2020 : AIX-EN-PROVENCE</span><br>
                    DUT Informatique et responsable Web du BDE.</p>
            </div>
            <div class="leef1 absolute block w-leef p-4 text-center rounded-full text-white duration-200 shadow-lg">
                <p><span class="text-2xl">2020 - 2021 : AIX-EN-PROVENCE</span><br>
                    License Professionelle WEB en alternance chez Kaiman.</p>
            </div>

        </div>
    </div>
    {{--  End Timeline  --}}

    <div class="mt-60 mb-20 flex flex-col justify-center items-center">
        <h2 class="text-6xl">Mon CV</h2>
        <a href="doc/Maxime_BERNARD-CV.pdf" target="_blank">
            <img src="img/Maxime_BERNARD-CV.png" alt="" class="pdfImage w-96 mt-14 rounded-xl shadow-lg duration-300">
        </a>
    </div>
</div>


<script src="https://unpkg.com/scrollreveal"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/scrollreveal.js') }}"></script>
</body>
</html>
