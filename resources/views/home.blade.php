@extends('layouts.app')

@section('content')
  @php
    $postsPageId = (int) get_option('page_for_posts');
    $postsPage = $postsPageId ? get_post($postsPageId) : null;
  @endphp

  {{-- Contenu Gutenberg de la page "Blog" --}}
  @if($postsPage)
    {!! apply_filters('the_content', $postsPage->post_content) !!}
  @endif

  {{-- Ensuite, liste des articles --}}
  @if(have_posts())
    @while(have_posts()) @php(the_post())
      {{-- Ton template de card/article --}}
      @include('partials.content')
    @endwhile

    {!! get_the_posts_navigation() !!}
  @else
    <p>Aucun article.</p>
  @endif
@endsection
