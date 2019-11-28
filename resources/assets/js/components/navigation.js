class Navigation extends HTMLElement {
  constructor() {
    super();
    this.handleNavigationToggle = this.handleNavigationToggle.bind(this);
    this.handleNavigationClose = this.handleNavigationClose.bind(this);
    this.init();
  }

  init() {
    this.toggler = this.querySelector('.navigation .navigation-toggle');
    this.toggler.addEventListener('click', this.handleNavigationToggle);
  }

  handleNavigationToggle() {
    document.body.classList.toggle('navigation-opened');
  }

  handleNavigationClose() {
    document.body.classList.remove('navigation-opened');
  }
}

export default Navigation;
