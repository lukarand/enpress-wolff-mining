class Project extends HTMLElement {
  constructor() {
    super();
    this.fancyboxProject = this.querySelector('[data-fancybox-project]');
    $(this.fancyboxProject).fancybox({
      buttons: [
        "close"
      ]
    }).trigger('click');
  }
  
}

export default Project;