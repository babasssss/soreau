<div {!! soreau_block_wrapper( $block, $attributes, 'soreau-title', [], ['data-block-name' => $block->name ?? null] ) !!}>
  <div class="flex flex-col sm:flex-row pb-5 1440:pb-10 1920:pb-12.5 items-center gap-5 self-stretch w-fullborder border-b border-dark-12">
    <div class="flex flex-col items-start gap-1 flex-[1_0_0]">
      <p class="self-stretch text-grey-50 font-manrope text-subtitle-h2 font-semibold uppercase leading-normal"> {{ $attributes['subtitle'] ?? '' }} </p>
      <h2>{{ $attributes['title'] ?? '' }}</h2>
    </div>
    <div class="flex">
      {!! $content !!}
    </div>
  </div>
</div>