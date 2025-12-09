@php $isResponsive = ($variant ?? null) === 'responsive'; @endphp

@if(!empty($items) && is_array($items))
  <nav aria-label="{{ $m?->get('name').' navigation' ?? 'secondary navigation' }}" @class(['block w-full' => ($variant ?? null) === 'responsive', 'hidden lg:block w-auto'  => ($variant ?? null) !== 'responsive', ])">
    @foreach ($items as $item)
      @php($isActive = $item->active ?? false)
      @if($loop->first)
        <a href="{{ $item->url }}" @class([ 'btn-soreau-primary', 'btn-soreau-primary-active' => $isActive, 'btn-soreau-primary-default' => ! $isActive, ]) @if($isActive) aria-current="page" @endif >
          {{ $item->label }}
        </a>
      @endif
    @endforeach
  </nav>
@endif
