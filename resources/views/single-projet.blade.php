{{--
  Template Name: Custom Template
  Template Post Type : projet
--}}
  @include('partials.head')
  @include('partials.header-project')

  <div class="wrap_project">
    <div class="wrap_project__left">
      <div id="scene" class="wrap_project__left--img">
        <img class="wrap_project__left--img__1" src="{{the_field('illustration_project')}}">
        <img class="wrap_project__left--img__2" src="@php bloginfo('template_directory') @endphp/assets/images/tache.png" data-depth="0.8">
      </div>
      <a class="link" href="{{the_field('link')}}">link</a>
    </div>
    <div class="wrap_project__right animate__animated animate__bounce">
      <h2>@php the_field('name_project') @endphp</h2>
      <p>@php the_field('description_project') @endphp</p>
      <h3>Tools I used for this project :</h3>
      @php $languages = get_field('languages_project'); @endphp
      <p>-
        @foreach ($languages as $language)
          {{$language['language_name']}} -
        @endforeach
      </p>
    </div>
  </div>

  @php wp_footer() @endphp
  @include('partials.footer')

