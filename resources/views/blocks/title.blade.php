<div {!! soreau_block_wrapper(
    $block,
    $attributes,
    'soreau-title',
    [],
    ['data-block-name' => $block->name ?? null]
) !!}>
  <div class="text-white">{!! $content !!}</div>
</div>