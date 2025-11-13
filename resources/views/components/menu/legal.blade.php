@if (!empty($items) && is_array($items) && ($variant ?? null) !== 'responsive')

  @php
    $indexedItems = array_values($items);
    $count = count($indexedItems);
  @endphp

  <nav aria-label="{{ $m?->get('name') ?? 'Legal navigation' }}" class="flex flex-col items-start 1920:gap-5 1440:gap-4 gap-3.5">
    <ul class="flex items-center gap-2.75">
      @foreach($indexedItems as $i => $item)

        @php
          $isActive = $item->active ?? false;
          $nextIsActive = $indexedItems[$i+1]->active ?? false;
        @endphp

        <li @class(['footer-legal-item text-grey-50 text-sm 1920:text-lg leading-150 font-normal hover:text-purple-55 transition-colors duration-300','is-active text-purple-55' => $isActive,])>
          <a href="{{ $item->url }}" class="!no-underline" @if($isActive) aria-current="page" @endif>
            {{ $item->label }}
          </a>
        </li>

        @if ($i < $count - 1)
          <li @class(['footer-legal-separator w-0.25 h-max transition-colors duration-300',$isActive || $nextIsActive ? 'bg-purple-55' : 'bg-dark-12',])>
            &nbsp;
          </li>
        @endif
      @endforeach
    </ul>
  </nav>
@endif
