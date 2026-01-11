<div {!! soreau_block_wrapper($block, $attributes, 'soreau-about-me', [], ['data-block-name' => $block->name ?? null]) !!}>
  <div class="flex flex-col items-start gap-15 1440:gap-20 1920:gap-25">
    <div class="h-auto w-full bg-[url('http://portfolio.local/wp-content/uploads/2026/01/Bastien-SOREAU-About-Me.png')] bg-cover bg-center bg-no-repeat rounded-2xl">
      <div class="w-full relative">
        <div class="bg-dark-03 w-min relative pr-4 1440:pr-6">
          <p class="!text-subtitle-h2">About Me</p>
          <h1 class="!text-h2 !text-white uppercase whitespace-nowrap">About Bastien SOREAU</h1>
          <x-icon-arc-concave class="absolute right-0 top-0 translate-x-2/2 z-10 pointer-events-none rotate-0 size-5" />
          <x-icon-arc-concave class="absolute right-0 bottom-0 translate-x-2/2 z-10 pointer-events-none rotate-270 size-5" />
        </div>
        <x-icon-arc-concave class="absolute right-0 top-0 z-10 pointer-events-none rotate-90 size-5" />
        <x-icon-arc-concave class="absolute right-0 bottom-0 z-10 pointer-events-none rotate-180 size-5" />
      </div>
      
      <div class="w-full bg-dark-03 py-4 relative">
        <div class="grid grid-cols-2 grid-rows-3 gap-2.5 1920:gap-5 self-stretch md:grid-cols-6 md:grid-rows-2 lg:grid-cols-5 lg:grid-rows-1">
          @php
            $keyFigures = [
              ['value' => '15+', 'label' => 'Years in Business'],
              ['value' => '500+', 'label' => 'Happy Clients'],
              ['value' => '10+', 'label' => 'Photography Awards'],
              ['value' => '05+', 'label' => 'International Shoots'],
              ['value' => '10,000+', 'label' => 'Social Media Followers'],
            ];
          @endphp
          @foreach($keyFigures as $i => $figure)
            @php
              $gridClass = match ($i) {
                0 => 'md:col-span-2 md:col-start-1 lg:col-span-1 lg:col-start-1 lg:row-start-1',
                1 => 'md:col-span-2 md:col-start-3 lg:col-span-1 lg:col-start-2 lg:row-start-1',
                2 => 'row-start-2 md:col-span-2 md:col-start-5 md:row-start-1 lg:col-span-1 lg:col-start-3 lg:row-start-1',
                3 => 'row-start-2 md:col-span-3 md:col-start-1 md:row-start-2 lg:col-span-1 lg:col-start-4 lg:row-start-1',
                4 => 'col-span-2 row-start-3 md:col-span-3 md:col-start-4 md:row-start-2 lg:col-span-1 lg:col-start-5 lg:row-start-1',
                default => '',
              };
            @endphp

            @include('partials.cards.key-figures', array_merge($figure, [
              'class' => $gridClass,
            ]))
          @endforeach
        </div>
        <x-icon-arc-concave class="absolute right-0 bottom-0 translate-y-2/2 z-10 pointer-events-none rotate-90 size-5" />
      </div>
      <div class="bg-dark-03 py-3 w-5/12 relative">
        <x-icon-wave class="absolute right-0 top-0 z-10 pointer-events-none rotate-0 size-6 translate-x-2/2" />
      </div>
      <div class="h-54">
        <x-icon-arc-concave class="pointer-events-none rotate-0 size-5" />
      </div>
      <div class="flex justify-between items-end self-stretch">
        <div class="flex relative px-5 py-6 bg-dark-03 rounded-tr-2xl">
          <x-icon-north-star class="text-dark-20 1920:size-34.25 1440:size-25" />
          <x-icon-arc-concave class="absolute left-0 top-0 -translate-y-2/2 z-10 pointer-events-none rotate-270 size-5" />
          <x-icon-arc-concave class="absolute right-0 bottom-0 translate-x-2/2 z-10 pointer-events-none rotate-270 size-5" />
        </div>
        <div class="relative flex px-7 py-10 bg-dark-03 rounded-tl-2xl max-w-54">
          <p class="uppercase">{{ __("Faites défiler pour voir mon parcours", "soreau") }}</p>
          <x-icon-arc-concave class="absolute right-0 top-0 -translate-y-2/2 z-10 pointer-events-none rotate-180 size-5" />
          <x-icon-arc-concave class="absolute left-0 bottom-0 -translate-x-2/2 z-10 pointer-events-none rotate-180 size-5" />
        </div>
      </div>
    </div>
    <div class="flex 1920:py-20 1440:py-15 py-10 flex-col items-start self-stretch border-t border-b border-dark-12">

    </div>
  </div>
</div>

