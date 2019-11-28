class HeroCarousel extends HTMLElement {
  constructor() {
    super();

    this.handleClick = this.handleClick.bind(this);
    this.handleResize = this.handleResize.bind(this);
    this.handleMouseEvents = this.handleMouseEvents.bind(this);

    this.setTimer = this.setTimer.bind(this);
    this.nextCard = this.nextCard.bind(this);
    this.prevCard = this.prevCard.bind(this);
    this.changeCardClasses = this.changeCardClasses.bind(this);
    this.calculateStyles = this.calculateStyles.bind(this);

    this.init();
  }

  handleClick(event) {
    this.cardIndex = parseInt(event.target.dataset.index) || 0;
    this.changeCardClasses();
    this.setTimer();
  }

  handleResize(event) {
    const sliderWidth = document.body.querySelector('.home-hero-block .cards-slider').offsetWidth;

    if (sliderWidth > this.SMALL_WIDTH && this.smallMode) {
      this.calculateStyles(this.NORMAL_WIDTH);
      this.smallMode = false;
    }
    else if (sliderWidth < this.NORMAL_WIDTH && !this.smallMode) {
      this.calculateStyles(this.SMALL_WIDTH);
      this.smallMode = true;
    }
  }

  handleMouseEvents() {
    this.exPosX = 0;
    this.upEvent = false;
    this.clickable = false;
    const thisElement = this;
    const containerElement = this.querySelector('.carousel-container');

    containerElement.addEventListener('mousedown', function (event) {
      event.preventDefault();
      thisElement.exPosX = event.screenX;
      thisElement.upEvent = true;
      clearInterval(thisElement.timerId);
      thisElement.clickable = true;
    });
    containerElement.addEventListener('touchstart', function (event) {
      thisElement.exPosX = event.touches[0].screenX;
      thisElement.upEvent = true;
      clearInterval(thisElement.timerId);
      thisElement.clickable = true;
    });

    containerElement.addEventListener('mouseleave', function (event) {
      if (thisElement.upEvent) {
        event.preventDefault();
        thisElement.upEvent = false;
        thisElement.setTimer();
      }
    });
    containerElement.addEventListener('touchcancel', function (event) {
      if (thisElement.upEvent) {
        thisElement.upEvent = false;
        thisElement.setTimer();
      }
    });

    containerElement.addEventListener('mouseup', function (event) {
      if (thisElement.upEvent) {
        thisElement.clickable = false;
        event.preventDefault();
        if (event.screenX > thisElement.exPosX + 40) {
          thisElement.prevCard();
        }
        else if (event.screenX < thisElement.exPosX - 40) {
          thisElement.nextCard();
        }
        else {
          thisElement.clickable = true;
        }
        thisElement.upEvent = false;
        thisElement.setTimer();
      }
    });
    containerElement.addEventListener('touchend', function (event) {
      if (thisElement.upEvent) {
        thisElement.clickable = false;
        const currentX = event.changedTouches[0].screenX;
        if (currentX > thisElement.exPosX + 40) {
          thisElement.prevCard();
        }
        else if (currentX < thisElement.exPosX - 40) {
          thisElement.nextCard();
        }
        else {
          thisElement.clickable = true;
        }
        thisElement.upEvent = false;
        thisElement.setTimer();
      }
    });
  }

  setTimer() {
    if (this.autoPlay) {
      clearInterval(this.timerId);
      this.timerId = setInterval(this.nextCard, this.TIME_INTERVAL);
    }
  }

  nextCard() {
    if (this.cardIndex < this.cardCount - 1) {
      this.cardIndex++;
    }
    else {
      this.cardIndex = 0;
    }
    this.changeCardClasses();
  }

  prevCard() {
    if (this.cardIndex > 0) {
      this.cardIndex--;
    }
    else {
      this.cardIndex = this.cardCount - 1;
    }
    this.changeCardClasses();
  }

  changeCardClasses() {
    for (let i = 0; i < this.cardCount; i++) {
      const controlDot = this.querySelector('.control-dot.dot-' + i);
      const triElement = this.querySelector('.control-tri.tri-' + i);
      const cardElement = this.querySelector('.carousel-card.card-' + i);
      cardElement.classList.remove('current');
      cardElement.classList.remove('left');
      cardElement.classList.remove('right');
      cardElement.classList.remove('back');
      if (i == this.cardIndex) {
        controlDot.classList.add('current');
        triElement.classList.add('current');
        cardElement.classList.add('current');
      }
      else {
        controlDot.classList.remove('current');
        triElement.classList.remove('current');
        if (i == this.cardIndex + 1 || (this.cardIndex == this.cardCount - 1 && i == 0)) {
          cardElement.classList.add('right');
        }
        else if (i == this.cardIndex - 1 || (this.cardIndex == 0 && i == this.cardCount - 1)) {
          cardElement.classList.add('left');
        }
        else {
          cardElement.classList.add('back');
        }
      }
    }
  }

  calculateStyles(sliderWidth) {
    const sliderHeight = 660.0 / 600 * sliderWidth;

    const dotDiameter = 12.0 / 600 * sliderWidth;
    const triSize = 10.0 / 600 * sliderWidth;

    let outerDiameter = 517.0 / 600 * sliderWidth;
    const innerDiameter = 465.0 / 600 * sliderWidth;

    const centerX = sliderWidth / 2;
    const centerY = sliderHeight - outerDiameter / 2;
    outerDiameter -= triSize;
    const startAngle = -8 * (this.cardCount - 1) / 2;

    for (let i = 0; i < this.cardCount; i++) {
      let angle = startAngle + i * 8;
      this.querySelector('.tri-' + i).style.transform = 'rotate(' + (-angle) + 'deg)';

      angle *= Math.PI / 180;
      let element = this.querySelector('.tri-' + i);
      element.style.left = (centerX + (outerDiameter * Math.sin(angle) - triSize) / 2) + 'px';
      element.style.top = (centerY + (outerDiameter * Math.cos(angle) - triSize) / 2) + 'px';
      element.style.borderLeft = (triSize / 2) + 'px solid transparent';
      element.style.borderRight = (triSize / 2) + 'px solid transparent';
      element.style.borderBottom = triSize + 'px solid #71C4FF';
      element.style.height = triSize + 'px';

      element = this.querySelector('.dot-' + i);
      element.style.left = (centerX + (innerDiameter * Math.sin(angle) - dotDiameter) / 2) + 'px';
      element.style.top = (centerY + (innerDiameter * Math.cos(angle) - dotDiameter) / 2) + 'px';
      element.style.width = dotDiameter + 'px';
      element.style.height = dotDiameter + 'px';
    }
  }

  init() {
    this.SMALL_WIDTH = 345;
    this.NORMAL_WIDTH = 600;
    this.TIME_INTERVAL = 8000;
    this.autoPlay = true;
    this.timerId = 0;
    this.cardIndex = 0;
    this.cardCount = this.querySelectorAll('.carousel-card').length;

    this.changeCardClasses();
    setTimeout(() => {
      this.querySelector('.carousel-container').style.opacity = 1;
    }, 500);

    const sliderWidth = document.body.querySelector('.home-hero-block .cards-slider').offsetWidth;
    if (sliderWidth < this.NORMAL_WIDTH) {
      this.calculateStyles(this.SMALL_WIDTH);
      this.smallMode = true;
    }
    else {
      this.calculateStyles(this.NORMAL_WIDTH);
      this.smallMode = false;
    }

    const thisElement = this;
    this.querySelectorAll('.carousel-card').forEach(function (element) {
      element.addEventListener('click', function () {
        if (thisElement.clickable) {
          thisElement.cardIndex = parseInt(this.dataset.index) || 0;
          thisElement.changeCardClasses();
          thisElement.setTimer();
        }
        else {
          thisElement.clickable = true;
        }
      });
    });

    this.querySelectorAll('.control-dot').forEach(function (element) {
      element.addEventListener('click', thisElement.handleClick);
    });

    this.querySelectorAll('a.cc-description').forEach(function (element) {
      element.addEventListener('click', function (event) {
        event.stopPropagation();
      });
    });

    this.handleMouseEvents();

    window.addEventListener('resize', this.handleResize);

    this.setTimer();
  }
}

export default HeroCarousel;
