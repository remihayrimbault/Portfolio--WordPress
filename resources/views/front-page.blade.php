
  @include('partials.head')
  @include('partials.header')


  <div class="me">
    <div class="rellax" data-rellax-speed="-2">
      <h1 class="h1_rhr"> @php echo get_bloginfo('name'); @endphp</h1>
    </div>
    <div>
      <img class="image_rhr" src=" @php the_field('image'); @endphp">
      <h2 class="h2_rhr rellax" data-rellax-speed="2"> @php echo get_bloginfo('description'); @endphp</h2>
    </div>
  </div>

  @php $smileys = get_field('smileys'); @endphp
  <div class="projects">
    @foreach ($smileys as $smiley)
      <a class="project" href="/projet/{{$smiley['slug']}}">
        <div class="{{$smiley['slug']}} bande">
          <div>{{$smiley['name']}} <img src="{{$smiley['smiley']}}"></div>
          <div>{{$smiley['name']}} <img src="{{$smiley['smiley']}}"></div>
          <div>{{$smiley['name']}} <img src="{{$smiley['smiley']}}"></div>
          <div>{{$smiley['name']}} <img src="{{$smiley['smiley']}}"></div>
          <div>{{$smiley['name']}} <img src="{{$smiley['smiley']}}"></div>
        </div>
      </a>
    @endforeach
  </div>

  @php wp_footer() @endphp
  @include('partials.footer')
