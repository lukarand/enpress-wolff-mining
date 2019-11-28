class Carousel extends HTMLElement {
  constructor() {
    super();
    this.init();
  }

  handleChange(event, slick, currentSlide) {
    this.updateActiveContent(slick, currentSlide);
  }

  updateActiveContent(slick, currentSlide) {
    const $slide = $(slick.$slides[currentSlide]);
    const $content = $slide.find('script[data-item="post-info"]');
    const content = $content.html();
    this.$component.find('.post-info').html(content);
  }

  init() {
    this.$component = $(this);
    this.$display = this.$component.find('.carousel-collection');
    this.$display.slick({
      slidesToShow: 1,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true
    });
    this.$display.on('afterChange', this.handleChange.bind(this));
    this.updateActiveContent(this.$display.slick('getSlick'), 0);
  }
}

export default Carousel;
