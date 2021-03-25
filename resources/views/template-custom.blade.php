{{--
  Template Name: Template projet
--}}

@extends('layouts.app')
<p>Test</p>
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
