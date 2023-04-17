<div
    class="animation-container animation-loanding animation animation-duration-3s animation-forwards animation-timing-linear">
    {{-- <div class="linea linea-1 animation animation-duration-1s animation-infinite animation-timing-linear animation-center"></div> --}}
    {{-- <div class="linea linea-2 animation animation-duration-05s animation-infinite animation-timing-linear animation-center"></div> --}}
    @for ($i = 0; $i < 10; $i++)
        <div class="opacity-1 cuadro animation-home animation animation-duration-2s animation-infinite animation-timing-linear animation-center"
            style="animation-delay: {{ 0.2 * $i }}s;">
        </div>
    @endfor
</div>
