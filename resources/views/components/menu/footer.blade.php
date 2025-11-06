@if($m)
<nav aria-label="{{ $m->get('name') }}">
  <ul class="grid grid-cols-2 lg:grid-cols-4 gap-2 text-sm text-grey-600">
    @foreach ($m as $item)
      <li>
        <a href="{{ $item->url }}" class="hover:text-grey-900 transition">
          {{ $item->label }}
        </a>

        {{-- Footer sans sous-niveaux, ou listes verticales --}}
        @if(!empty($item->children))
          <ul class="mt-1 space-y-1">
            @foreach ($item->children as $child)
              <li>
                <a href="{{ $child->url }}" class="text-grey-500 hover:text-grey-900 transition">
                  {{ $child->label }}
                </a>
              </li>
            @endforeach
          </ul>
        @endif
      </li>
    @endforeach
  </ul>
</nav>
@endif
