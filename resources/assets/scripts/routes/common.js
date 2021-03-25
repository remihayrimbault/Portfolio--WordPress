import Parallax from 'parallax-js';
import $ from 'jquery';

export default {
  init() {
    function transition_out () {
      console.log('out');
      $('.transition').toggleClass('is-nonactive');
      $('body').css('overflow', 'hidden');
    }
    function transition_in () {
      console.log('in');
      $('.transition').toggleClass('is-nonactive');
      $('body').css('overflow', 'visible');
    }
    $('.image_rhr').on('click', function () {
      transition_out();
      transition_in();
    });
    setTimeout('transition_in()', 10000);
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene);
    parallaxInstance.init();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
