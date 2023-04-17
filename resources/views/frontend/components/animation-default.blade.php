<div
    class="animation-container animation-loanding animation animation-duration-3s animation-forwards animation-timing-linear">
    <div style="margin-left: 112px; margin-top: 50px; width: 100%; height: 100%; position: relative;">
        @for ($i = 0; $i < 12; $i++)
            <div class="opacity-1 cuadro animation-default-loading animation animation-duration-2s animation-infinite animation-timing-linear animation-center"
                style="animation-delay: {{ 0.2 * $i }}s; margin-left: -{{ 20 * $i }}px;">
            </div>
        @endfor
    </div>
</div>
