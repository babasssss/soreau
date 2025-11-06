@php
  $services = [
    'Event Photography',
    'Commercial Photography',
    'Product Photography',
    'Portrait Photography',
    'Lifestyle Photography',
    'Wedding Photography',
    'Landscape Photography',
    'Branding Photography',
    'Portrait  Photography',
  ];
@endphp

<div class="flex flex-col items-start w-full px-4 sm:px-0 sm:w-8/10 mx-auto max-w-full 1440:max-w-(--max-w-1279) 1920:max-w-(--max-w-1593)">
  <div class="flex flex-col items-end 1920:gap-25 1440:gap-15 gap-5 self-stretch">
    <div class="flex flex-wrap justify-center items-center gap-2 sm:gap-3.5">
      @svg('bastien.b', '1920:h-53.25 1440:h-42.25 h-11 w-auto')
      @svg('bastien.a', '1920:h-53.25 1440:h-42.25 h-11 w-auto')
      @svg('bastien.s', '1920:h-53.25 1440:h-42.25 h-11 w-auto')
      @svg('bastien.t', '1920:h-53.25 1440:h-42.25 h-11 w-auto')
      @svg('bastien.i', '1920:h-53.25 1440:h-42.25 h-11 w-auto')
      @svg('bastien.e', '1920:h-53.25 1440:h-42.25 h-11 w-auto')
      @svg('bastien.n', '1920:h-53.25 1440:h-42.25 h-11 w-auto')
    </div>

    <ul class="full-bleed-centered flex 1920:p-5 1920:gap-5 p-4 gap-4 self-stretch border-t border-b border-dark-12 bg-dark-06">
      @foreach ($services as $service)
        <li class="flex 1920:gap-2.5 gap-1.5 items-center">
          <x-icon-start class="text-purple-80 1920:w-10 w-7.5 h-auto" />
          <span class="truncate  text-purple-90 text-sm 1920:text-lg font-normal leading-150 uppercase">
            {{ $service }}
          </span>
        </li>
      @endforeach
    </ul>
  </div>
</div>  