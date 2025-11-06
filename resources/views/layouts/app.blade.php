<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body @php(body_class('font-manrope bg-dark-03'))>
    @php(wp_body_open())

    <div id="app" class="flex flex-col justify-between items-start max-w-(--max-w-1920) mx-auto min-h-screen overflow-hidden">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>

      <div id="content" class="content w-full">
        @include('sections.header')

        <div class="w-full px-4 sm:px-0 sm:w-8/10 mx-auto max-w-full 1440:max-w-(--max-w-1279) 1920:max-w-(--max-w-1593)">
          <main id="main" class="main">
            @yield('content')
          </main>
        </div>
      </div>

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
