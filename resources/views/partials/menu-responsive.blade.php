<div class="block lg:hidden absolute bottom-0 right-0" x-data="MenuCanvas()" x-cloak @keydown.escape.window="close();" x-init="$watch('open', v => document.body.classList.toggle('overflow-hidden', v))">
  <button type="button" class="inline-flex p-5 items-center justify-center gap-2.5 rounded-tl-20 border-t border-l border-dark-12 cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-55 focus-visible:ring-offset-2 focus-visible:ring-offset-dark-03" @click="openDrawer($el)">
    <x-icon-menu class="text-white h-7 w-7"/>
  </button>

  <div x-show="open" x-transition.opacity :aria-hidden="(!open).toString()" @class(['fixed inset-x-0 bottom-0 z-50', 'top-8' => is_user_logged_in(), 'top-0' => ! is_user_logged_in(), ])>
    <div class="absolute inset-0 bg-black/50" @click="close()"></div>

    <aside class="absolute right-0 top-0 h-dvh w-screen sm:w-[420px] md:w-[480px] lg:w-[560px] max-w-full bg-dark-06 text-white shadow-2xl transform transition-transform duration-300"
      :class="open ? 'translate-x-0' : 'translate-x-full'"
      role="dialog" aria-modal="true" :aria-labelledby="titleId">

      <header class="flex items-center justify-end px-2.5 py-2 border-b border-dark-12">
        <button type="button" class="rounded-lg p-2 hover:bg-dark-3 transition cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-55 focus-visible:ring-offset-2 focus-visible:ring-offset-dark-03" @click="close()" aria-label="Fermer">
          <x-icon-x class="h-6 w-6 text-white"/>
        </button>
      </header>

      <div class="p-5 space-y-4 overflow-y-auto h-[calc(100dvh-64px)]">
        <x-menu name="primary_navigation" variant="responsive"/>
        <x-menu name="secondary_navigation" variant="responsive" />
      </div>
    </aside>
  </div>
</div>