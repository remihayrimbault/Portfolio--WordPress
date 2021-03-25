    <footer>
      <h2>Contact</h2>

      <a href="@php the_field('telephone','option') @endphp">☎️  @php the_field('telephone','option') @endphp</a><br><br>
      <a href="mailto:@php the_field('e-mail','option') @endphp">✉️  @php the_field('e-mail','option') @endphp</a>

      <div class="final_bar">
        <a href="{{the_permalink()}}mentions-legales/">Legal Notice</a>
      </div>
    </footer>
  </body>
</html>
