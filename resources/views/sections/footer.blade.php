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
          <span class="truncate  text-purple-90 text-sm 1920:text-lg font-normal leading-150 uppercase select-none">
            {{ $service }}
          </span>
        </li>
      @endforeach
    </ul>
  </div>
  <div class="full-bleed-centered border-b border-dark-12 px-4 sm:px-0">
    <div class="relative flex flex-col md:flex-row md:items-stretch w-full sm:w-8/10 mx-auto max-w-full 1440:max-w-(--max-w-1279) 1920:max-w-(--max-w-1593) bg-dark-03 border-l border-r border-dark-12">
      <div class="flex flex-col items-start 1920:gap-15 1440:gap-12.5 gap-5 py-10 px-5 1440:py-20 1440:px-14 1920:py-25 1920:px-20">
        <p class="text-grey-50 text-sm 1440:text-base 1920:text-xl font-semibold uppercase">
          {{ __('A more meaningful home for photography', 'soreau') }}
        </p>
        <x-lets-work-together />
      </div>

      <div class="flex-1 border-t md:border-l md:border-t-0 border-dark-12 py-10 px-5 1440:py-20 1440:px-14 1920:py-25 1920:px-20">
        <x-menu name="footer_navigation" />
      </div>
        
      <x-icon-design-footer class="absolute left-0 top-1/2 -translate-x-full -translate-y-1/2 text-dark-12 pointer-events-none select-none" aria-hidden="true"/>
      <x-icon-design-footer class="absolute right-0 top-1/2 translate-x-full -translate-y-1/2 text-dark-12 pointer-events-none select-none rotate-180" aria-hidden="true"/>
    </div>
  </div>

    <div class="relative flex flex-wrap 1920:py-10 1440:py-8.5 py-5 justify-center sm:justify-between items-center self-stretch gap-4">
      <x-menu name="legal_navigation"/>
      <p class="!text-grey-50 !text-sm 1920:!text-lg !leading-150 !font-normal !text-center">
        © {{ now()->year }} {{ __('Bastien Soreau Développeur. Tous droits réservés.', 'soreau') }}
      </p>
      <div class="sm:absolute sm:left-1/2 sm:top-1/2 sm:-translate-x-1/2 sm:-translate-y-1/2">
        <x-social-links />
      </div>
  </div>
</div>  