<article class="{{ $classes }} swiper-slide">
  <header class="space-y-2">
    <h3 class="text-lg font-semibold leading-tight">
      <a href="{{ $permalink }}" class="hover:underline">
        {{ $title }}
      </a>
    </h3>

    <div class="text-sm opacity-80 flex flex-wrap gap-x-3 gap-y-1">
      <time datetime="{{ esc_attr($dateIso) }}">
        {{ $dateLabel }}
      </time>

      <span>•</span>

      <span>
        By <a href="{{ $author['link'] }}" class="underline">{{ $author['name'] }}</a>
      </span>
    </div>
  </header>

  @if(!empty($excerpt))
    <div class="mt-3 text-sm opacity-90">
      {!! wp_kses_post($excerpt) !!}
    </div>
  @endif
</article>
