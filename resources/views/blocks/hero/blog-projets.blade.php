<div {!! soreau_block_wrapper($block, $attributes, 'soreau-blog-projets', [], ['data-block-name' => $block->name ?? null]) !!}>
  <div class="flex flex-col items-start 1920:gap-20 1440:gap-15 gap-10">
    <div class="relative h-auto w-full overflow-hidden rounded-2xl lg:bg-dark-12">

      @if($url = data_get($attributes, 'backgroundImage.url'))
        <img
          src="{{ $url }}"
          alt="{{ data_get($attributes, 'backgroundImage.alt') }}"
          class="block w-full h-auto object-cover lg:hidden mb-7.5"
          loading="lazy"
          decoding="async"
        />
      @endif

      @if($url = data_get($attributes, 'backgroundImage.url'))
        <img
          src="{{ $url }}"
          alt="{{ data_get($attributes, 'backgroundImage.alt') }}"
          class="hidden lg:block absolute inset-0 h-full w-full object-cover"
          loading="lazy"
          decoding="async"
        />
      @endif

      <div class="w-full relative bg-dark-12 lg:bg-transparent ">
        @if(!empty($attributes['subtitle']) || !empty($attributes['title']))
          <div class="bg-dark-03 w-max 1920:max-w-5xl 1440:max-w-4xl relative pr-7.5 1440:pr-12.5 1920:py-12.5 1440:py-7.5 py-0 rounded-br-2xl flex flex-col items-start 1920:gap-7.5 gap-6 self-stretch">
            <div class="flex flex-col items-start gap-0 self-stretch">
              <p class="!text-subtitle-h2 uppercase">{{ $attributes['subtitle'] }}</p>
              <h1 class="!text-h2 !text-white uppercase whitespace-normal sm:whitespace-nowrap">{{ $attributes['title'] }}</h1>
            </div>
            {!! $content !!}
            <x-icon-arc-concave class="absolute right-0 top-0 translate-x-2/2 z-10 pointer-events-none rotate-0 size-5" />
          </div>
        @endif
        <x-icon-arc-concave class="absolute right-0 top-0 z-10 pointer-events-none rotate-90 size-5" />
      </div>
      <div class="hidden lg:block h-54">
        <x-icon-arc-concave class="pointer-events-none rotate-0 size-5" />
      </div>
      <div class="hidden lg:flex justify-between items-end self-stretch">
        <div class="flex relative px-5 py-6 bg-dark-03 rounded-tr-2xl">
          <x-icon-north-star class="text-dark-20 1920:size-34.25 1440:size-25" />
          <x-icon-arc-concave class="absolute left-0 top-0 -translate-y-2/2 z-10 pointer-events-none rotate-270 size-5" />
          <x-icon-arc-concave class="absolute right-0 bottom-0 translate-x-2/2 z-10 pointer-events-none rotate-270 size-5" />
        </div>
        <div class="relative flex px-7 py-10 bg-dark-03 rounded-tl-2xl max-w-54">
          <p class="uppercase select-none">{{ __("Faites défiler pour voir mes projets", "soreau") }}</p>
          <x-icon-arc-concave class="absolute right-0 top-0 -translate-y-2/2 z-10 pointer-events-none rotate-180 size-5" />
          <x-icon-arc-concave class="absolute left-0 bottom-0 -translate-x-2/2 z-10 pointer-events-none rotate-180 size-5" />
        </div>
      </div>
    </div>

    <div class="flex flex-col items-center 1920:gap-4.5 gap-3.5 self-stretch">
      <p class="uppercase">{{ __("Marques avec lesquelles j'ai travaillé", "soreau") }}</p>
      <div class="full-bleed-centered flex justify-center items-center 1920:py-7.5 1440:py-6 border border-y border-dark-12 bg-dark-06">
        <div class="flex gap-3.5 justify-between items-center self-stretch  max-w-full 1440:max-w-(--max-w-1279) 1920:max-w-(--max-w-1593) w-full">
          @foreach(data_get($attributes, 'brands', []) as $brand)
            @php
              $id  = data_get($brand, 'id');
              $alt = data_get($brand, 'alt', '');
            @endphp

            @if($id && get_post_mime_type($id) === 'image/svg+xml')
              @php
                $path = get_attached_file($id);
                $svg  = ($path && file_exists($path)) ? file_get_contents($path) : '';
              @endphp

              <div class="h-8.5 1440:h-10 1920:h-12.5 max-w-full [&_svg]:h-full [&_svg]:w-auto [&_svg]:max-w-full [&_svg]:block [&_svg]:object-contain text-dark-30 pointer-events-none select-none" role="img" aria-label="{{ $alt }}">
                {!! $svg !!}
              </div>
            @elseif($url = data_get($brand, 'url'))
              {{-- fallback si jamais ce n’est pas un svg --}}
              <img src="{{ $url }}" alt="{{ $alt }}" class="block h-8.5 1440:h-10 1920:h-12.5 w-auto object-contain max-w-full" loading="lazy" decoding="async" />
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
