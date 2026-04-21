<div class="flex flex-col items-start 1920:gap-2.5 gap-0">
    <div class="flex items-center gap-2.5">
    <h2 class="text-white text-h2 font-semibold uppercase">
        {{ __("Projets", "soreau") }}
    </h2>
    <a href="{{ esc_url(home_url('/projets/')) }}" class="group flex text-lg 1920:py-4.5 1920:px-12.5 1440:py-4 1440:px-10 py-3.5 px-7.5 rounded-full bg-purple-55 shadow-footer">
        <x-icon-arrow-up-right
        class="text-white 1920:size-7.5 w-7.5 1440:size-6 size-5 transition-transform ease-in-out duration-300 group-hover:scale-[1.2] group-hover:rotate-45" />
    </a>
    </div>
    <h2 class="text-white text-h2 font-semibold uppercase">
    {{ __("& Réalisations", "soreau") }}
    </h2>
</div>