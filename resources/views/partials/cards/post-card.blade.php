<article class="swiper-slide">
  <a href="{{ $permalink }}" class="flex flex-col items-start 1920:gap-4.75 gap-3.5 flex-1">
    <div class="flex self-stretch 1920:h-129.75 1440:h-102.25 h-83.75 w-full rounded-20 overflow-hidden bg-dark-06 justify-center items-center">
      @if(!empty($thumb['url']))
        <img src="{{ $thumb['url'] }}" alt="{{ $thumb['alt'] }}" class="block w-full h-full object-cover" loading="lazy" decoding="async" />
      @else
        <p>BASTIEN</p>
      @endif
    </div>

    <div class="space-y-2 mt-4">
      <h3 class="text-lg font-semibold leading-tight">

          {{ $title }}
      </h3>

      <div class="text-sm opacity-80 flex flex-wrap gap-x-3 gap-y-1">
        <time datetime="{{ esc_attr($dateIso) }}">{{ $dateLabel }}</time>
      </div>
    </div>
  </a>
</article>