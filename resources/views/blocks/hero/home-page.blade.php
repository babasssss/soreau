<div {!! soreau_block_wrapper($block, $attributes, 'soreau-home-page', [], ['data-block-name' => $block->name ?? null]) !!}>
  <div class="flex flex-col items-start">
    <div class="relative flex 1920:mb-20 1440:mb-15 mb-10 justify-between items-center self-stretch w-full overflow-visible">
      <div class="hidden 1440:block w-auto absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 pointer-events-none">
        <x-icon-semicircle class="1920:size-86.5 1440:size-65.5" />
      </div>
      <div class="relative z-10 flex flex-col justify-center items-start 1920:gap-2.5 gap-1 self-stretch">
        {!! $content !!}
      </div>
      <div class="relative z-10">
        <x-lets-work-together />
      </div>
    </div>
  </div>
</div>

