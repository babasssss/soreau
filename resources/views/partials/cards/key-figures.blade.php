<div class="flex flex-col w-full 1920:py-6 1920:px-7.5 1440:px-6 py-5 px-3.5 items-center lg:items-start rounded-xl border border-dark-12 bg-dark-06 {{ $class ?? '' }}">
  @if(!empty($value))
    <p class="!text-about-me !text-white">{{ $value }}</p>
  @endif

  @if(!empty($label))
    <p class="whitespace-nowrap">{{ $label }}</p>
  @endif
</div>
