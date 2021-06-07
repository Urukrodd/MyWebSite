<div class="md:mt-52 mt-20 max-w-7xl flex flex-col justify-center items-center flex-wrap">
    <h2 class="md:text-6xl text-5xl">Mes compétences</h2>
    <div class="mt-14 flex flex-row flex-wrap items-center justify-center">

        <svg width="0" height="0">
            <radialGradient id="rg" r="150%" cx="30%" cy="107%">
                <stop stop-color="#2af598" offset="0" />
                <stop stop-color="#009efd" offset="0.9" />
            </radialGradient>
        </svg>

        <svg width="0" height="0">
            <radialGradient id="rb" r="150%" cx="30%" cy="107%">
                <stop stop-color="#009efd" offset="0" />
                <stop stop-color="#2af598" offset="0.9" />
            </radialGradient>
        </svg>


        @foreach($comps as $comp)
            <div class="c-case mt-6 p-6 mx-3 my-3 max-w-sm flex flex-col justify-center items-center rounded-md shadow bg-white">
                <span class="text-7xl m-5">
                    <i class="fab {{ $comp->icon }}"></i>
                </span>
                {!! $comp->texte !!}
            </div>
        @endforeach

    </div>
</div>
