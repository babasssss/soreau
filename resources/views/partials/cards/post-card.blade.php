<article class="swiper-slide">
  <a href="{{ $permalink }}" class="group flex flex-col items-start 1920:gap-4.75 gap-3.5 flex-1">
    <div class="flex self-stretch 1920:h-129.75 1440:h-102.25 h-83.75 w-full rounded-20 overflow-hidden bg-dark-06 justify-center items-center">
      @if(!empty($thumb['url']))
        <img
          src="{{ $thumb['url'] }}"
          alt="{{ $thumb['alt'] }}"
          class="block w-full h-full object-cover transition duration-500 ease-out group-hover:scale-[1.05] group-hover:brightness-110"
          loading="lazy"
          decoding="async"
        />
      @else
        <p class="transition duration-500 ease-out group-hover:scale-[1.05] group-hover:brightness-110">BASTIEN</p>
      @endif
    </div>

    <div class="flex items-start 1920:gap-5 gap-3.5 self-stretch">
      <div class="flex flex-col items-start flex-1">
        <h3 class="text-grey-80 font-manrope font-medium text-title-post-card">{{ $title }}</h3>
        <p><time datetime="{{ esc_attr($dateIso) }}">{{ $dateLabel }}</time></p>
      </div>

      <div class="flex 1920:py-1.5 py-1 items-start 1920:gap-2.5 gap-1 border-b border-dark-20 transition-colors duration-300 group-hover:border-purple-55">
        <span class="text-grey-95 uppercase transition-colors duration-300 group-hover:text-purple-55 font-medium leading-150">
          {{ __("Voir le projet", "soreau") }}
        </span>
        <x-icon-arrow-top-down class="text-white 1920:size-6 size-5 transition-colors duration-300 group-hover:text-purple-55" />
      </div>
    </div>
  </a>
</article>
