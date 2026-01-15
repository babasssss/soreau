<section class="flex 1920:py-20 flex-col items-start 1920:gap-12.5 self-stretch py-10 1440:gap-10 gap-5 border-t border-dark-12">
  <div class="flex items-center justify-between 1920:gap-12.5 self-stretch 1440:gap-10 gap-5">
    <h2 class="!text-title-blog !text-grey-50 uppercase">{{ $term->name }}</h2>

    <div class="flex w-fit p-2 1920:p-2.5 gap-2 1920:gap-2.5 justify-center items-center rounded-full border border-dark-12 bg-dark-03">
      <button type="button" aria-label="{!! __('Previous slide', 'soreau') !!}" class="js-swiper-prev group flex p-2.5 1920:p-3.5 items-center gap-2.5 1920:gap-3.5 rounded-full border-gradient-dark-footer-network hover:px-3.5 1920:hover:px-4.5 transition-all ease-in-out duration-300 cursor-pointer active-shadow">
        <x-icon-arrow-left class="text-white 1920:size-4 size-3.5 group-hover:scale-110 transition-all ease-in-out duration-300" />
      </button>
      
      <button type="button" aria-label="{!! __('Next slide', 'soreau') !!}" class="js-swiper-next group flex p-2.5 1920:p-3.5 items-center gap-2.5 1920:gap-3.5 rounded-full border-gradient-dark-footer-network hover:px-3.5 1920:hover:px-4.5 transition-all ease-in-out duration-300 cursor-pointer active-shadow">
        <x-icon-arrow-left class="text-white 1920:size-4 size-3.5 group-hover:scale-110 transition-all ease-in-out duration-300 rotate-180" />
      </button>
    </div>
  </div>

  <div class="swiper w-full overflow-hidden min-w-0 self-stretch relative z-0" data-swiper="brands">
    <div class="swiper-wrapper">
      @foreach($cards as $card)
        @include('partials.cards.post-card', $card)
      @endforeach
    </div>

    <x-icon-arc-concave class="absolute left-0 top-0 pointer-events-none z-10 size-5" />
    <x-icon-arc-concave class="absolute right-0 top-0 pointer-events-none z-10 size-5 rotate-90" />
    <x-icon-arc-concave class="absolute left-0 1920:top-129.75 1440:top-102.25 top-83.75 -translate-y-2/2 pointer-events-none z-10 size-5 rotate-270" />
    <x-icon-arc-concave class="absolute right-0 1920:top-129.75 1440:top-102.25 top-83.75 -translate-y-2/2 pointer-events-none z-10 size-5 rotate-180" />
  </div>
</section>
