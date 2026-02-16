@if (!empty($items) && is_array($items))
  @if(($variant ?? null) !== 'responsive')
    <nav aria-label="{{ $m?->get('name') ?? 'Footer navigation' }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 space-y-10 space-x-5">
      @foreach ($items as $item)
        @php
          $isActive = $item->active ?? false;
          $children  = is_array($item->children ?? null) ? $item->children : [];
        @endphp
        <ul class="flex flex-col items-start 1920:gap-5 1440:gap-4 gap-3.5">
          <p class="text-grey-50 font-semibold 1920:text-lg text-sm uppercase select-none">{{ $item->label }}</p>
          <div class="flex flex-col items-start 1920:gap-1.5 gap-1">
            @foreach ($children as $child)
              <li @class([ 'group flex items-start gap-2.5 border-b border-b-dark-20 hover:border-b-purple-55 transition-[border-color] duration-300', 'text-purple-55 border-b-purple-55' => $child->active ?? false, ])>
                <a href="{{ $child->url }}" @class([ 'py-1.5 px-0 text-grey-95 text-sm 1920:text-lg uppercase font-medium !no-underline transition-colors duration-300 group-hover:text-purple-55', 'text-purple-55' => $child->active ?? false, ]) @if(!empty($child->target)) target="{{ $child->target }}" rel="noopener noreferrer" @endif @if($child->active ?? false) aria-current="page" @endif>
                  {{ $child->label }}
                </a>
              </li>
            @endforeach
          </div>
        </ul>
      @endforeach
    </nav>
  @endif
@endif