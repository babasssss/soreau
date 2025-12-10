<div {!! soreau_block_wrapper( $block, $attributes, 'soreau-introduction', [], ['data-block-name' => $block->name ?? null] ) !!}>
  <div class="grid grid-cols-1 gap-5 1920:gap-7.5 mt-10 1440:mt-15 1920:mt-20 
          xl:grid-cols-[minmax(0,_1fr)_minmax(0,_1fr)]">

    <div>
      @if(!empty($attributes['image']))
        <img
          src="{{ $attributes['image']['url'] }}"
          alt="{{ $attributes['image']['alt'] ?? '' }}"
          class="w-full h-auto 1920:max-h-177.5 1440:max-h-146.25 max-h-93.75 object-cover rounded-xl"
          style="background: url('{{ $attributes['image']['url'] }}') lightgray 50% / cover no-repeat, url('{{ $attributes['image']['url'] }}') lightgray 50% / cover no-repeat, var(--color-grey-97);"
        />
      @endif
    </div>

    <div class="relative md:row-start-auto row-start-2 self-center flex flex-col items-center justify-start w-full border border-dark-12 1440:rounded-(--radius-20) rounded-2xl 1920:p-10 1440:p-7.5 p-6">
      {!! $content !!}
    </div>
  </div>
</div>
