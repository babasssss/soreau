<header class="w-full border-b border-dark-12">
  <div class="mx-auto px-4 sm:px-0 w-full sm:w-8/10 1440:w-full max-w-full 1440:max-w-(--max-w-1316) 1920:max-w-(--max-w-1670) flex flex-col items-start gap-2.5">
    <div class="relative flex justify-between items-center self-stretch border-r border-l border-dark-12 1920:py-7.5 1920:px-10 pb-5 px-4.5 lg:pt-5 pt-10">
      @php
        $homeUrl = esc_url(home_url('/'));
        $isActiveHome = is_front_page() || (is_home() && ! is_front_page());
      @endphp
      <a href="{{ $homeUrl }}" class="text-white font-bold leading-150 !no-underline text-2xl" @if($isActiveHome) aria-current="page" @endif>BASTIEN</a>
      <x-menu name="secondary_navigation" />
      <x-menu name="primary_navigation" />

      @include('partials.menu-responsive')
    </div>
  </div>
</header>