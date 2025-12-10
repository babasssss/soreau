<div {!! soreau_block_wrapper( $block, $attributes, 'soreau-title', [], ['data-block-name' => $block->name ?? null] ) !!}>
  <div class="flex flex-col sm:flex-row pb-5 1440:pb-10 1920:pb-12.5 items-start sm:items-center gap-5 self-stretch w-fullborder border-b border-dark-12">
    @if(!empty(trim($attributes['subtitle'] ?? '')) || !empty(trim($attributes['title'] ?? '')))
      <div class="flex flex-col items-start gap-1 flex-[1_0_0]">
        @if(!empty(trim($attributes['subtitle'] ?? '')))
          <p class="self-stretch text-grey-50 font-manrope text-subtitle-h2 font-semibold uppercase leading-normal"> {{ $attributes['subtitle'] ?? '' }} </p>
        @endif
        @if(!empty(trim($attributes['title'] ?? '')))
          <h2 class="uppercase">{{ $attributes['title'] ?? '' }}</h2>
        @endif
      </div>
    @endif
    <div class="flex">
      {!! $content !!}
    </div>
  </div>
</div>