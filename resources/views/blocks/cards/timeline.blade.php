<div {!! soreau_block_wrapper($block, $attributes, 'soreau-timeline', [], ['data-block-name' => $block->name ?? null]) !!}>
  <div class="relative 1920:p-12.5 1440:p-10 p-6 rounded-xl border border-dark-12 bg-dark-06 overflow-hidden isolate h-full">
    
    <div class="pointer-events-none absolute z-0 top-0 right-0 translate-x-1/2 -translate-y-1/2 1920:size-115 1440:size-96.25 size-91 rounded-3xl bg-linear-gradient -rotate-145"></div>
    <div class="pointer-events-none absolute z-0 bottom-0 left-0 -translate-x-1/2 translate-y-2/3 1920:size-122.5 1440:size-102.5 size-96.75 rounded-3xl bg-linear-gradient rotate-40"></div>

    <div class="relative flex z-10 w-full flex-col items-start 1920:gap-5 1440:gap-3.5 gap-2.5 grow shrink-0 basis-0">
      {!! $content !!}
    </div>

  </div>
</div>
