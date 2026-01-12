<div {!! soreau_block_wrapper($block, $attributes, 'soreau-home-page', [], ['data-block-name' => $block->name ?? null]) !!}>
  <div class="flex flex-col items-start">
    <div class="relative flex flex-col gap-5 xl:flex-row 1920:mb-20 1440:mb-15 mb-10 justify-between items-center self-stretch w-full overflow-visible">
      <div class="hidden 1440:block w-auto absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 pointer-events-none">
        <x-icon-semicircle class="1920:size-86.5 1440:size-65.5" />
      </div>
      <div class="relative z-10 flex flex-col justify-center items-start 1920:gap-2.5 gap-1 self-stretch">
        {!! $content !!}
      </div>
      <div class="relative z-10 w-full xl:w-auto">
        <x-lets-work-together />
      </div>
    </div>
  </div>

  <x-services-banner />

  <div class="relative flex items-start w-full gap-2 1440:gap-4">
    <div class="relative min-w-0 basis-0 grow-[104.5] flex flex-col gap-2 1440:gap-4 1440:grow-0 1440:shrink-0 1440:basis-auto 1440:w-104.5 1920:w-130">
      <x-icon-arc-concave class="absolute right-0 top-[calc(28.75%)] -translate-y-1/2 z-10 pointer-events-none rotate-180 h-4 w-4" />

      @if(!empty($attributes['images'][0]['id']))
        <div class="w-full bg-dark-03 rounded-lg 1440:rounded-xl overflow-hidden aspect-[130/88.5] 1440:aspect-auto 1440:h-73.5 1920:h-88.5">
          {!! wp_get_attachment_image($attributes['images'][0]['id'], 'full', false, ['class' => 'block w-full h-full object-cover']) !!}
        </div>
      @endif

      @if(!empty($attributes['images'][1]['id']))
        <div class="bg-dark-03 rounded-lg 1440:rounded-xl overflow-hidden w-[32.5%] aspect-[42.5/35.75] 1440:w-34 1920:w-42.5 1440:aspect-auto 1440:h-29.5 1920:h-35.75">
          {!! wp_get_attachment_image($attributes['images'][1]['id'], 'full', false, ['class' => 'block w-full h-full object-cover']) !!}
        </div>
      @endif
    </div>

    <div class="relative min-w-0 basis-0 grow-[131] 1440:grow-0 1440:shrink-0 1440:basis-auto 1440:w-131 1920:w-163.25">
      <x-icon-arc-concave class="absolute left-0 top-[calc(28.75%)] -translate-y-1/2 z-10 pointer-events-none rotate-270 h-4 w-4" />

      @if(!empty($attributes['images'][2]['id']))
        <div class="w-full bg-dark-03 rounded-lg 1440:rounded-xl overflow-hidden aspect-[163.25/128] 1440:aspect-auto 1440:h-106 1920:h-128">
          {!! wp_get_attachment_image($attributes['images'][2]['id'], 'full', false, ['class' => 'block w-full h-full object-cover']) !!}
        </div>
      @endif
    </div>

    <div class="min-w-0 basis-0 grow-[78] flex flex-col gap-2 1440:gap-4 1440:grow-0 1440:shrink-0 1440:basis-auto 1440:w-78 1920:w-97.5">

      @if(!empty($attributes['images'][3]['id']))
        <div class="w-full bg-dark-03 rounded-lg 1440:rounded-xl overflow-hidden aspect-[97.5/73.25] 1440:aspect-auto 1440:h-60.5 1920:h-73.25">
          {!! wp_get_attachment_image($attributes['images'][3]['id'], 'full', false, ['class' => 'block w-full h-full object-cover']) !!}
        </div>
      @endif

      @if(!empty($attributes['images'][4]['id']))
        <div class="w-full bg-dark-03 rounded-lg 1440:rounded-xl overflow-hidden aspect-[97.5/51.25] 1440:aspect-auto 1440:h-41.25 1920:h-51.25">
          {!! wp_get_attachment_image($attributes['images'][4]['id'], 'full', false, ['class' => 'block w-full h-full object-cover']) !!}
        </div>
      @endif
    </div>

    <div class="absolute z-0 pointer-events-none bottom-0 left-[calc(10.75%)] w-1/3 h-[70%] overflow-visible">
      <div class="w-full h-full bg-dark-03 rounded-t-xl 1440:rounded-t-2xl overflow-hidden px-2 1440:px-4 pt-2 1440:pt-4">
        @if(!empty($attributes['images'][5]['id']))
          {!! wp_get_attachment_image($attributes['images'][5]['id'], 'full', false, ['class' => 'block w-full rounded-lg 1440:rounded-xl h-full object-cover']) !!}
        @endif
      </div>

      <x-icon-arc-concave class="absolute right-[calc(-1.5%)] bottom-[calc(-1.75%)] -translate-y-1/2 translate-x-1/2 z-10 pointer-events-none rotate-270 h-4 w-4" />
      <x-icon-arc-concave class="absolute left-[calc(-1.5%)] top-[calc(48.7%)] translate-y-1/2 -translate-x-1/2 z-10 pointer-events-none rotate-180 h-4 w-4" />
    </div>

  </div>
</div>

