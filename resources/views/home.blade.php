@extends('layouts.app')

@section('content')
  @if(!empty($postsPageContent))
    {!! $postsPageContent !!}
  @endif

  @if(!empty($categoryGroups))
    @foreach($categoryGroups as $group)
      @include('partials.blog.category-group', $group)
    @endforeach
  @else
    <p>Aucun article.</p>
  @endif
@endsection
