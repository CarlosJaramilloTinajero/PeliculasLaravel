<ul class="splide__list">
    @foreach ($user->movies as $lista)
        <li class="splide__slide slide second-slide">
            <a href="{{ route('show.movie', ['pelicula' => $lista->movie->id]) }}">
                <div class="cart-movie cart-movie-full p-relative cart-movie-hover"
                    style="box-shadow: -8px 8px 8px {{ str_replace(')', ', ' . $opacityBoxShadows . ');', $lista->movie->category->Color) }}">
                    <div class="cart-movie-img">
                        <img src="{{ $lista->movie->ImagenCartel }}" alt="">
                    </div>
                    <form class="delete-movie" wire:submit.prevent="removeMovie({{ $lista->movie->id }})">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-x-square-fill botonX" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                            </svg>
                        </button>
                    </form>
            </a>
        </li>
    @endforeach
</ul>
