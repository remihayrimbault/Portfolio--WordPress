  @include('partials.head')
  @include('partials.header-project')

  <h2>@php the_title(); @endphp</h2>

  <div class="legal_content">
    @php the_content(); @endphp
  </div>

  @php wp_footer() @endphp
  @include('partials.footer')
