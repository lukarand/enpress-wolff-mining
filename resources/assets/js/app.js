import "@webcomponents/webcomponentsjs";
import 'popper.js';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import 'slick-carousel';
import '@fancyapps/fancybox';

import Navigation from './components/navigation';
import HeroCarousel from './components/hero-carousel';
import Carousel from './components/carousel';
import CardValue from './components/card-value';
import Project from './components/project';

const cardValue = new CardValue('.card-value');
cardValue.init();
window.customElements.define('app-navigation', Navigation);
window.customElements.define('hero-carousel', HeroCarousel);
window.customElements.define('app-carousel', Carousel);
window.customElements.define('app-project', Project);

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
    cardValue.handleScrollLoading();
  });
});

