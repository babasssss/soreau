@if (!empty($items) && is_array($items))
  @if(($variant ?? null) !== 'responsive')
    <nav aria-label="{{ $m?->get('name') ?? 'Primary navigation' }}" class="hidden lg:block absolute bottom-0 left-1/2 -translate-x-1/2 z-10 w-max">
      <ul class="flex items-center overflow-hidden 1920:rounded-t-xl rounded-t-(--rounded-10) border-t border-r border-l border-dark-12">
        @foreach ($items as $item)
          @php
            $isActive = $item->active ?? false;
            $rounded = $loop->first
              ? '1920:rounded-tl-xl rounded-tl-(--rounded-10)'
              : ($loop->last ? '1920:rounded-tr-xl rounded-tr-(--rounded-10)' : '');
          @endphp

          <li @class(['group', 'border-r border-dark-12' => !$loop->last, 'bg-dark-08' => $isActive, $rounded, ])>
            <a href="{{ $item->url }}" @class([ 'inline-flex items-center gap-2.5 whitespace-nowrap py-6', 'px-10 1920:px-12.5 text-white' => $isActive, 'px-7.5 1920:px-10 text-grey-70' => !$isActive, 'hover:px-10 1920:hover:px-12.5 hover:text-white group-hover:bg-dark-06 focus-visible:bg-dark-06', 'transition-[padding,color,background-color] duration-200 ease-linear leading-150 font-medium text-sm 1920:text-lg !no-underline', ]) @if($isActive) aria-current="page" @endif>
              {{ $item->label }}
            </a>
          </li>
        @endforeach
      </ul>
    </nav>
  @else
    {{-- Variante responsive : juste un texte pour l’instant --}}
    <nav aria-label="{{ $m?->get('name') ?? 'Primary navigation' }}" class="flex flex-col items-start justify-center w-full">
      <div class="flex flex-col gap-4">
        @foreach ($items as $item)
          <a href="{{ $item->url }}" class="inline-flex items-center gap-2.5 whitespace-nowrap py-3 px-7.5 1920:px-10 text-grey-70 border border-dark-12 rounded-(--rounded-10)">
            {{ $item->label }}
          </a>
        @endforeach
      </div>
    </nav>
  @endif
@endif
