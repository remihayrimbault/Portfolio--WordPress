import Parallax from 'parallax-js';
import Rellax from 'rellax';

export default {
  init() {
    var rellax = new Rellax('.rellax');
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene);
    rellax.init();
    parallaxInstance.init();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
