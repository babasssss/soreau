@php $isResponsive = ($variant ?? null) === 'responsive'; @endphp

@if(!empty($items) && is_array($items))
  <nav aria-label="{{ $m?->get('name').' navigation' ?? 'secondary navigation' }}" @class(['block w-full' => ($variant ?? null) === 'responsive', 'hidden lg:block w-auto'  => ($variant ?? null) !== 'responsive', ])">
    @foreach ($items as $item)
      @php($isActive = $item->active ?? false)
      @if($loop->first)
        <a href="{{ $item->url }}" class="inline-flex items-center gap-2.5 whitespace-nowrap 1920:py-4 py-3.5 {{ ($item->active ?? false) ? 'px-6 1920:px-7.5 text-white' : 'px-5 1920:px-6 text-grey-70' }} hover:px-6 1920:hover:px-7.5 hover:[--fill:var(--color-dark-06)] hover:text-white border-gradient-dark transition-[padding,color,background-color] duration-200 ease-linear font-medium leading-150 text-sm 1920:text-lg !no-underline" @if($item->active ?? false) aria-current="page" @endif>
          {{ $item->label }}
        </a>
      @endif
    @endforeach
  </nav>
@endif
