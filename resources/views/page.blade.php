@extends('layouts.app')

@include('partials.head')
@include('partials.header')

<h1> @php echo get_bloginfo('name'); @endphp</h1>
<img src=" @php the_field('image'); @endphp">
<h2> @php echo get_bloginfo('description'); @endphp</h2>

@php $smileys = get_field('smileys'); @endphp

@foreach ($smileys as $smiley)
  <a href="/projet/{{$smiley['slug']}}">
    <div class="{{$smiley['slug']}}" style="display:flex;flex-direction:row;">
      <div><img src="{{$smiley['smiley']}}"> {{$smiley['name']}}</div>
      <div><img src="{{$smiley['smiley']}}"> {{$smiley['name']}}</div>
      <div><img src="{{$smiley['smiley']}}"> {{$smiley['name']}}</div>
      <div><img src="{{$smiley['smiley']}}"> {{$smiley['name']}}</div>
    </div>
  </a>
@endforeach

@include('partials.footer')
