<div {!! soreau_block_wrapper($block, $attributes, 'soreau-contact', [], ['data-block-name' => $block->name ?? null]) !!}>
  <div class="flex flex-col items-start gap-15 1440:gap-20 1920:gap-25">
    <div class="relative h-auto w-full overflow-hidden 1920:rounded-5xl 1440:rounded-3xl rounded-2xl lg:bg-dark-12">

      @if($url = data_get($attributes, 'backgroundImage.url'))
        <div class="flex relative w-auto h-auto mb-10.5">
          <img
            src="{{ $url }}"
            alt="{{ data_get($attributes, 'backgroundImage.alt') }}"
            class="block w-full h-auto object-cover lg:hidden rounded-2xl"
            loading="lazy"
            decoding="async"
          />
          
          <div class="lg:hidden block absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 py-2.5 px-3.75 bg-dark-03 rounded-full">
            <x-social-links />
          </div>
        </div>

        <img
          src="{{ $url }}"
          alt="{{ data_get($attributes, 'backgroundImage.alt') }}"
          class="hidden lg:block absolute inset-0 h-full w-full object-cover"
          loading="lazy"
          decoding="async"
        />
      @endif

      <div class="hidden lg:flex h-36 relative items-end justify-end w-full">
        <x-icon-arc-concave class="pointer-events-none rotate-270 1920:size-12 1440:size-6 size-4 absolute left-0 bottom-0" />
        <div class="flex 1920:py-5 1440:py-4 py-3 1920:pl-5 1440:pl-4 pl-3 bg-dark-03 rounded-l-full">
          <x-social-links />
        </div>
      </div>

      <div class="w-full relative bg-dark-12 lg:bg-transparent">
        @if(!empty($attributes['subtitle']) || !empty($attributes['title']))
          <div class="bg-dark-03 w-max 1920:max-w-5xl 1440:max-w-4xl lg:max-w-2/3 relative pr-7.5 1440:pr-12.5 1920:py-12.5 py-7.5 1920:rounded-r-5xl 1440:rounded-r-3xl rounded-r-2xl flex flex-col items-start 1920:gap-7.5 gap-6 self-stretch">
            <div class="flex flex-col items-start gap-0 self-stretch">
              <p class="!text-subtitle-h2 uppercase">{{ $attributes['subtitle'] }}</p>
              <h1 class="!text-h2 !text-white uppercase whitespace-normal sm:whitespace-nowrap">{{ $attributes['title'] }}</h1>
            </div>
            {!! $content !!}
          </div>
        @endif
      </div>

      <div class="hidden lg:block h-24">
        <x-icon-arc-concave class="pointer-events-none rotate-0 1920:size-12 1440:size-6 size-4" />
      </div>
      <div class="hidden lg:flex justify-end items-end self-stretch">
        <div class="relative flex px-7 py-10 bg-dark-03 1920:rounded-tl-5xl 1440:rounded-tl-3xl rounded-tl-2xl max-w-59.5">
          <p class="uppercase select-none">{{ __("Faites défiler pour m'envoyer un message", "soreau") }}</p>
          <x-icon-arc-concave class="absolute right-0 top-0 -translate-y-2/2 z-10 pointer-events-none rotate-180 size-5" />
          <x-icon-arc-concave class="absolute left-0 bottom-0 -translate-x-2/2 z-10 pointer-events-none rotate-180 size-5" />
        </div>
      </div>
    </div>
  </div>
</div>

