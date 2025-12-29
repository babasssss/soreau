<ul class="full-bleed-centered flex 1920:p-5 1920:gap-5 p-4 gap-4 self-stretch border-t border-b border-dark-12 bg-dark-06">
  @foreach ($services as $service)
    <li class="flex 1920:gap-2.5 gap-1.5 items-center">
      <x-icon-start class="text-purple-80 1920:w-10 w-7.5 h-auto" />
      <span class="truncate text-purple-90 text-sm 1920:text-lg font-normal leading-150 uppercase select-none">
        {{ $service }}
      </span>
    </li>
  @endforeach
</ul>
