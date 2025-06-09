/**
  DEFINE CONSTANT TO CHANGE DINAMICALLY THE ANIMATION OF THE MENU
 */
const MENU_LEVEL_2_DELAY = 50;
const MENU_LEVEL_2_DURATION = 200;
const MENU_LEVEL_3_DELAY = 50;
const MENU_LEVEL_3_DURATION = 200;
const MENU_MOBILE_DURATION = 200;
const CLOSE_OTHER_MENUS = false;
const SCROLL_DURATION = 800;


document.addEventListener("DOMContentLoaded", () => {

  /********
   FUNCTIONS TO MANAGE THE DESKTOP MENU
   ********/

  new HoverIntent(document.querySelectorAll('.group.inline-block'), {
    interval: MENU_LEVEL_2_DELAY,
    exitDelay: MENU_LEVEL_2_DELAY,
    onEnter: function(item) {
      const menu = item.querySelector('ul.cs-menu-level2');
      if (menu) {
        fadeIn(menu, MENU_LEVEL_2_DURATION);
      }
    },
    onExit: function(item) {
      const menu = item.querySelector('ul.cs-menu-level2');
      if (menu) {
        fadeOut(menu, MENU_LEVEL_2_DURATION);
      }
    }
  });

  new HoverIntent(document.querySelectorAll('.cs-dropdown'), {
    interval: MENU_LEVEL_3_DELAY,
    exitDelay: 0,
    onEnter: function(item) {
      const menu = item.querySelector('ul.cs-menu-level3');
      if (menu) {
        fadeIn(menu, MENU_LEVEL_3_DURATION);
      }
    },
    onExit: function(item) {
      const menu = item.querySelector('ul.cs-menu-level3');
      if (menu) {
        fadeOut(menu, MENU_LEVEL_3_DURATION);
      }
    }
  });

  /********
   * FUNCTIONS TO MANAGE THE MOBILE MENU
   ********/
  
  // For click event and also reference for outer div tag
  const btn = document.querySelector("button.cs-mobile-menu-button");
  const menu = document.querySelector("ul.cs-mobile-menu");
  if(btn && menu) {
    btn.addEventListener("click", () => {
      slideToggle(menu, MENU_MOBILE_DURATION);
    });

    document.querySelectorAll('.cs-mobile-menu-button').forEach(button => {
      button.addEventListener('click', function () {
        const menu = this.nextElementSibling;
        if (menu) {
          if (CLOSE_OTHER_MENUS) {
            if (menu.classList.contains('cs-inner')) {
              document.querySelectorAll('ul.cs-active.cs-inner').forEach(activeMenu => {
                if (activeMenu !== menu) {
                  slideToggle(activeMenu, MENU_MOBILE_DURATION);
                }
              });
              document.querySelectorAll('.cs-active').forEach(activeItem => {
                if (activeItem !== this) {
                  activeItem.classList.remove('cs-active');
                }
              });
            } else {
              document.querySelectorAll('ul.cs-active').forEach(activeMenu => {
                if (activeMenu !== menu) {
                  slideToggle(activeMenu, MENU_MOBILE_DURATION);
                }
              });
              document.querySelectorAll('.cs-active').forEach(activeItem => {
                if (activeItem !== this) {
                  activeItem.classList.remove('cs-active');
                }
              });
            }
          }

          if (menu.classList.contains('cs-active')) {
            slideToggle(menu, MENU_MOBILE_DURATION);
            menu.classList.remove('cs-active');
            this.classList.remove('cs-active');
          } else {
            menu.classList.add('cs-active');
            this.classList.add('cs-active');
            slideToggle(menu, MENU_MOBILE_DURATION);
          }
        }
      });
    });
  }

  /********
   * FUNCTIONS TO MANAGE THE USER MENU (BOTH MOBILE AND DESKTOP)
   ********/

  const loggedMenuBtn = document.querySelector('.cs-logged-avatar');
  const loggedMenu = document.querySelector('.cs-menu-logged');
  if (loggedMenuBtn) {
    onClickOutside(() => {
      if(loggedMenu.classList.contains('visible')) {
        document.querySelectorAll('.cs-logged-avatar').forEach(el => el.classList.toggle('hidden'));
        loggedMenu.classList.add('invisible');
        loggedMenu.classList.remove('visible');
        loggedMenu.classList.remove("opacity-100");
        loggedMenu.classList.add("opacity-0");
      }
    });

    loggedMenuBtn.addEventListener("click", () => {
      if(loggedMenu.classList.contains('invisible') && window.getComputedStyle(menu).display === 'block') {
        btn.click();
      }
      document.querySelectorAll('.cs-logged-avatar').forEach(el => el.classList.toggle('hidden'));
      loggedMenu.classList.toggle('invisible');
      loggedMenu.classList.toggle('visible');
      loggedMenu.classList.toggle("opacity-0");
      loggedMenu.classList.toggle("opacity-100");
    });
  }

  document.querySelectorAll('.cs-logged-nested').forEach(button => {
    button.addEventListener('click', function() {
      const menu = this.querySelector(".dropdown-menu");
      if (menu) {
        if(CLOSE_OTHER_MENUS) {
          document.querySelectorAll('ul.dropdown-menu.cs-active').forEach(activeMenu => {
            if(activeMenu !== menu) {
              slideUp(activeMenu, MENU_LEVEL_2_DURATION);
            }
          });
          document.querySelectorAll('.cs-active').forEach(activeItem => {
            if(activeItem !== this) {
              activeItem.classList.remove('cs-active');
            }
          });
        }
        if (menu.classList.contains('cs-active')) {
          slideToggle(menu, MENU_LEVEL_2_DURATION);
          menu.classList.remove('cs-active');
          this.classList.remove('cs-active');
        } else {
          menu.classList.add('cs-active');
          this.classList.add('cs-active');
          slideToggle(menu, MENU_LEVEL_2_DURATION);
        }
      }
    });
  });

  function onClickOutside(cb) {
    // function to close the menu when clicking outside
      document.addEventListener('click', event => {
      if (!loggedMenu.contains(event.target) && !loggedMenuBtn.contains(event.target)) cb();
    });
  }




  /********
   *  FUNCTIONS TO MANAGE ACCORDIONS
   ********/

  document.querySelectorAll('.cs-content').forEach((el, index) => {
    el.style.maxHeight = el.clientHeight + 'px';
  });

  //expand all elements of accordion
  const expandButton = document.querySelector('.cs-accordion-expand');
  if(expandButton !== null) {
    expandButton.addEventListener('click', function () {
      document.querySelectorAll('button.cs-bible-accordion-header, button.cs-personal-accordion-header').forEach(el => {
        if(el.nextElementSibling.style.maxHeight === '0px') {
          el.click();
        }
      });
    });
  }

  //collapse all elements of accordion
  const collapseButton = document.querySelector('.cs-accordion-collapse');
  if(collapseButton !== null) {
    collapseButton.addEventListener('click', function () {
      document.querySelectorAll('button.cs-bible-accordion-header, button.cs-personal-accordion-header').forEach(el => {
        if(el.nextElementSibling.style.maxHeight !== '0px') {
          el.click();
        }
      });
    });
  }

  /********
   *  FUNCTIONS TO MANAGE SCROLL TO ANCHOR
   ********/

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = this.getAttribute('href');
      smoothScrollTo(target, 100, SCROLL_DURATION); // Adjust offset and duration as needed
    });
  });

  setTimeout(animateTimelineImages, 100);


});


/********
 * FROM HERE AFTER THERE ARE THE FUNCTIONS TO MANAGE THE ANIMATIONS AND SPECIAL JQUERY MIGRATIONS
 ********/

function toggleAccordion(el) {
  let container = el.closest('.cs-accordion');
  if(!container) container = el.parentElement;

  const content = container.querySelector(`.cs-content`);
  const icon = container.querySelector(`.cs-icon`);
  const text = container.querySelectorAll(`.cs-text`);
  //get current classlist and apply
  icon?.querySelectorAll('img').forEach((el) => {
    el.classList.toggle('hidden');
  });

  //toggle text color
    text.forEach((el) => {
        el.classList.toggle('hidden');
    });

  // Toggle the content's max-height for smooth opening and closing
  if ((content.style.maxHeight && content.style.maxHeight !== '0px')) {
    content.style.maxHeight = '0';
  } else {
    content.style.maxHeight = content.scrollHeight + 'px';
  }

}

window.togglePassword = (el) => {
  const i = el.closest('div').querySelector('input');
  i.type = i.type=='password' ? 'text': 'password'
  el.classList.toggle('cs-active');
};

window.toggleAccordion = toggleAccordion;


function smoothScrollTo(target, offset = 0, duration = 500) {
  const element = document.querySelector(target);
  if (!element) return;

  const targetPosition = element.getBoundingClientRect().top + window.pageYOffset - offset;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  let startTime = null;

  function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    const timeElapsed = currentTime - startTime;
    const run = ease(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}

const slideUp = (target, duration=500) => {
  target.style.boxSizing = 'border-box';
  target.style.height = target.offsetHeight + 'px';
  target.style.overflow = 'hidden';
  target.offsetHeight;
  target.style.transitionProperty = 'height, margin, padding';
  target.style.transitionDuration = duration + 'ms';
  target.style.height = 0;
  target.style.paddingTop = 0;
  target.style.paddingBottom = 0;
  target.style.marginTop = 0;
  target.style.marginBottom = 0;
  target.style.removeProperty('padding-top');
  target.style.removeProperty('padding-bottom');
  target.style.removeProperty('margin-top');
  target.style.removeProperty('margin-bottom');
  window.setTimeout( () => {
    target.style.display = 'none';
    target.style.removeProperty('height');

    target.style.removeProperty('overflow');
    target.style.removeProperty('transition-duration');
    target.style.removeProperty('transition-property');
    //alert("!");
  }, duration);
}

const slideDown = (target, duration=500) => {
  target.style.removeProperty('display');
  let display = window.getComputedStyle(target).display;

  if (display === 'none')
    display = 'block';

  target.style.display = display;
  let height = target.offsetHeight;
  target.style.overflow = 'hidden';
  target.style.height = 0;
  target.style.paddingTop = 0;
  target.style.paddingBottom = 0;
  target.style.marginTop = 0;
  target.style.marginBottom = 0;
  target.offsetHeight;
  target.style.boxSizing = 'border-box';
  target.style.transitionProperty = "height, margin, padding";
  target.style.transitionDuration = duration + 'ms';
  target.style.height = height + 'px';
  target.style.removeProperty('padding-top');
  target.style.removeProperty('padding-bottom');
  target.style.removeProperty('margin-top');
  target.style.removeProperty('margin-bottom');
  window.setTimeout( () => {
    target.style.removeProperty('height');
    target.style.removeProperty('overflow');
    target.style.removeProperty('transition-duration');
    target.style.removeProperty('transition-property');
  }, duration);
}
const slideToggle = (target, duration = 500) => {
  if (window.getComputedStyle(target).display === 'none') {
    return slideDown(target, duration);
  } else {
    return slideUp(target, duration);
  }
}

const fadeOut = (el, duration, delay = 0) => {
  //throttle(() =>
    fadeAnime(el, duration, 'fadeOut')
  //, delay);
};

const fadeIn = (el, duration, delay = 0) => {
  //throttle(() =>
    fadeAnime(el, duration, 'fadeIn')
  //, 10);
};

const fadeToggle = (el, display, duration = 500) => {
    if (window.getComputedStyle(el).display === 'none') {
        return fadeAnime(el, duration, 'fadeIn');
    } else {
        return fadeAnime(el, duration, 'fadeOut');
    }
}

let prevAnimation = {};
let animationQueue = {};
const fadeAnime = async (target, duration, type) => {

  const typeFadeToggle = 'fadeToggle';
  const typeFadeIn = 'fadeIn';
  const typeFadeOut = 'fadeOut';

  const defaultOptions = {
    easing: 'ease',
    displayStyle: 'block',
  }

  const options = Object.assign({}, defaultOptions);

  if(!target) {
    return;
  }

  let animeType = type;
  const styles = getComputedStyle(target);
  const textNone = 'none';
  const isDisplayNone = styles.display === textNone;
  if (animeType === typeFadeToggle) {
    animeType = isDisplayNone ? typeFadeIn : typeFadeOut;
  }

  const isFadeOut = animeType === typeFadeOut;

  const targetStyle = target.style;
  const displayStyle = options.displayStyle;
  if(prevAnimation.hasOwnProperty(target) && prevAnimation[target] !== false){
    cancelAnimationFrame(animationQueue[target]);
    delete animationQueue[target];
    prevAnimation[target] = false;
  }
  let opacityAnimeValue;
  prevAnimation[target] = animeType;
  animationQueue[target] = requestAnimationFrame(async() => {
    if (isFadeOut) {
      targetStyle.opacity = 1;
      opacityAnimeValue = 0;

    } else {
      targetStyle.display = displayStyle;
      targetStyle.opacity = 0;
      opacityAnimeValue = 1;
    }
    await target.animate(
      {
        opacity: opacityAnimeValue
      },
      {
        duration: duration,
        easing: options.easing
      }
    ).finished;

    prevAnimation[target] = false;

    targetStyle.opacity = '';

    if(isFadeOut) {
      targetStyle.display = textNone;
    }
  });
}

// load namespace
function throttle(mainFunction, delay) {
  let timerFlag = null; // Variable to keep track of the timer

  // Returning a throttled version
  return (...args) => {
    if (timerFlag === null) { // If there is no timer currently running
      mainFunction(...args); // Execute the main function
      timerFlag = setTimeout(() => { // Set a timer to clear the timerFlag after the specified delay
        timerFlag = null; // Clear the timerFlag to allow the main function to be executed again
      }, delay);
    }
  };
}

const HoverIntent = (function() {

  // constructor
  return function(elements, userConfig) {

    // private members

    const defaultOptions = {
      exitDelay: 200,
      interval: 100,
      sensitivity: 10,
    };
    let config = {};

    let currX, currY, prevX, prevY;
    let allElems, pollTimer, exitTimer;

    // private methods

    // override default options with user config
    const extend = function(defaults, userArgs) {
      for (let i in userArgs) {
        defaults[i] = userArgs[i];
      }

      return defaults;
    };

    // update mouse position
    const mouseTrack = function(ev) {
      currX = ev.pageX;
      currY = ev.pageY;
    };

    // check if mouse movement has slowed enough to trigger active state
    const mouseCompare = function(targetElem) {
      const distX = prevX - currX, distY = prevY - currY;
      const distance = Math.sqrt(distX*distX + distY*distY);

      if (distance < config.sensitivity) {
        // if we re-entered an element, cancel delayed exit and clear any active elements immediately
        clearTimeout(exitTimer);
        for (let elem of allElems) {
          if (elem.isActive) {
            config.onExit(elem);
            elem.isActive = false;
          }
        }

        // trigger hover
        config.onEnter(targetElem);
        targetElem.isActive = true;
      } else {
        // update previous coordinates and try again later
        prevX = currX;
        prevY = currY;
        pollTimer = setTimeout(function() {
          mouseCompare(targetElem);
        }, config.interval);
      }
    };

    const init = function(elements, userConfig) {
      if (!userConfig || !userConfig.onEnter || !userConfig.onExit) {
        throw 'onEnter and onExit callbacks must be provided';
      }
      config = extend(defaultOptions, userConfig);
      allElems = elements;

      for (let elem of allElems) {
        // holds current element state
        elem.isActive = false;
        // keeps track of mouse position
        elem.addEventListener('mousemove', mouseTrack);

        elem.addEventListener('mouseenter', function(ev) {
          // set initial entry position
          prevX = ev.pageX;
          prevY = ev.pageY;
          // if this element is already active, cancel exit
          if (elem.isActive) {
            clearTimeout(exitTimer);
            return;
          }

          // while mouse is over this element, check distance every 100ms
          pollTimer = setTimeout(function() {
            mouseCompare(elem);
          }, config.interval);
        });
        elem.addEventListener('mouseleave', function(ev) {
          clearTimeout(pollTimer);
          if (!elem.isActive)
            return;

          exitTimer = setTimeout(function() {
            config.onExit(elem);
            elem.isActive = false;
          }, config.exitDelay);
        });
      }
    };

    init(elements, userConfig);
  };

})();

// === TIMELINE DESKTOP TOOLTIP LOGIC ===

//Timeline params config
const FADE_DURATION = 400;   //DO NOT CHANGE THIS

const TOP_OFFSET = 10; // Offset from the top of the image to the tooltip

//Configurable card content
const timelinePeriods = [
  {
    title: 'Early World',
    desc: '<div>Creation of the universe, fall of Adam and Eve and spread of sin</div>',
    books: 'Genesis 1-11',
    img: '/src/assets/bible-timeline/bt-card-p1.jpg',
    primaryColor: 'cs-period1-pri',
    secondaryColor: 'cs-period1-sec',
    textColor: 'text-white',
    toolTipTitle: 'The Creation of Adam',
    toolTipAuthor: 'Michelangelo (1508-1512)',
    toolTipLocation: 'Sistine Chapel, Vatican City',
    toolTipScripture: 'Genesis 1:26-27; 2:7',
    imgWrapperColor: 'cs-period1-third'
  },
  {
    title: 'Patriarchs',
    desc: '<div>The calling of Abraham and the birth of the twelve tribes of Israel</div>',
    books: 'Genesis 12-50',
    img: '/src/assets/bible-timeline/bt-card-p2.2.jpg',
    primaryColor: 'cs-period2-pri',
    secondaryColor: 'cs-period2-sec',
    textColor: 'text-white',
    toolTipTitle: 'The Sacrifice of Isaac',
    toolTipAuthor: 'Caravaggio (1603)',
    toolTipLocation: 'Uffizi Gallery, Florence, Italy',
    toolTipScripture: 'Genesis 22:1-18',
    imgWrapperColor: 'cs-period2-third'
  },
  {
    title: 'Egypt & Exodus',
    desc: '<div>Moses leads the Israelites out of Egypt and receives the Ten Commandments</div>',
    books: 'Exodus',
    img: '/src/assets/bible-timeline/bt-card-p3.jpg',
    primaryColor: 'cs-period3-pri',
    secondaryColor: 'cs-period3-sec',
    textColor: 'text-white',
    toolTipTitle: 'The Children of Israel Crossing the Red Sea',
    toolTipAuthor: 'Frédéric Schopin (1804–1880)',
    toolTipLocation: 'Bristol Museum, United Kingdom',
    toolTipScripture: 'Exodus 14:1-31',
    imgWrapperColor: 'cs-period3-third'
  },
  {
    title: 'Desert Wanderings',
    desc: '<div>The Israelites refuse to enter the Promised Land and wander for forty years across the desert</div>',
    books: 'Numbers',
    img: '/src/assets/bible-timeline/bt-card-p4.jpg',
    primaryColor: 'cs-period4-pri',
    secondaryColor: 'cs-period4-sec',
    textColor: 'text-black',
    toolTipTitle: 'Moses and the Brazen Serpent',
    toolTipAuthor: 'Anthony Van Dyck (1620)',
    toolTipLocation: 'Prado Museum, Madrid, Spain',
    toolTipScripture: 'Numbers 21:5-9',
    imgWrapperColor: 'cs-period4-third'
  },
  {
    title: 'Conquest & Judges',
    desc: '<div>Joshua leads the Israelites to the conquest of the Promised Land</div>',
    books: 'Joshua, Judges, 1 Samuel 1-8',
    img: '/src/assets/bible-timeline/bt-card-p5.jpg',
    primaryColor: 'cs-period5-pri',
    secondaryColor: 'cs-period5-sec',
    textColor: 'text-white',
    toolTipTitle: 'Joshua\'s Victory over the Amorites',
    toolTipAuthor: 'Nicolas Poussin (1624-1626)',
    toolTipLocation: 'Pushkin Museum, Moscow, Russia',
    toolTipScripture: 'Joshua 10:1-14',
    imgWrapperColor: 'cs-period5-third'
  },
  {
    title: 'Royal Kingdom',
    desc: '<div>The nation of Israel becomes a Kingdom under King David and King Solomon</div>',
    books: '1 Samuel 9-31, 2 Samuel, 1 Kings 1-11',
    img: '/src/assets/bible-timeline/bt-card-p6.jpg',
    primaryColor: 'cs-period6-pri',
    secondaryColor: 'cs-period6-sec',
    textColor: 'text-white',
    toolTipTitle: 'David with the Head of Goliath',
    toolTipAuthor: 'Caravaggio (1610)',
    toolTipLocation: 'Borghese Gallery, Rome, Italy',
    toolTipScripture: '1 Samuel 17:1-58',
    imgWrapperColor: 'cs-period6-third'
  },
  {
    title: 'Divided Kingdom',
    desc: '<div>The split of the Kingdom: the Northern Kingdom of Israel and the Southern Kingdom of Judah</div>',
    books: '1 Kings 12-22, 2 Kings 1-16',
    img: '/src/assets/bible-timeline/bt-card-p7.jpg',
    primaryColor: 'cs-period7-pri',
    secondaryColor: 'cs-period7-sec',
    textColor: 'text-white',
    toolTipTitle: 'The Sacrifice of Elijah Before the Priests of Baal',
    toolTipAuthor: 'Domenico Fetti (1622)',
    toolTipLocation: 'Royal Collection, Buckingham Palace, London, United Kingdom',
    toolTipScripture: '1 Kings 18:7-40',
    imgWrapperColor: 'cs-period7-third'
  },
  {
    title: 'Exile',
    desc: '<div>The deportation of the Israelites into Assyria and Babylon</div>',
    books: '2 Kings 17-25',
    img: '/src/assets/bible-timeline/bt-card-p8.jpg',
    primaryColor: 'cs-period8-pri',
    secondaryColor: 'cs-period8-sec',
    textColor: 'text-white',
    toolTipTitle: 'The destruction of the Temple of Jerusalem',
    toolTipAuthor: 'Francesco Hayez (1867)',
    toolTipLocation: 'Accademia Galleries, Venice, Italy',
    toolTipScripture: '2 Kings 25:1-21',
    imgWrapperColor: 'cs-period8-third'
  },
  {
    title: 'Return',
    desc: '<div>The return of the israelites into the Promised Land after seventy years of exile</div>',
    books: 'Ezra, Nehemiah',
    img: '/src/assets/bible-timeline/bt-card-p9.jpg',
    primaryColor: 'cs-period9-pri',
    secondaryColor: 'cs-period9-sec',
    textColor: 'text-black',
    toolTipTitle: 'The Banquet of Esther and Ahasuerus',
    toolTipAuthor: 'Jan Victors (1640)',
    toolTipLocation: 'State Museums, Kassel, Germany',
    toolTipScripture: 'Esther 3:1 to 7:10',
    imgWrapperColor: 'cs-period9-third'
  },
  {
    title: 'Maccabean Revolt',
    desc: '<div>The Jewish family of the Maccabees lead Israel to reject Greek domination</div>',
    books: '1 Maccabees',
    img: '/src/assets/bible-timeline/bt-card-p10.jpg',
    primaryColor: 'cs-period10-pri',
    secondaryColor: 'cs-period10-sec',
    textColor: 'text-white',
    toolTipTitle: 'The Martyrdom of the Seven Maccabees',
    toolTipAuthor: 'Antonio Ciseri (857–63)',
    toolTipLocation: 'Church of Santa Felicita, Florence, Italy',
    toolTipScripture: '2 Maccabees 7:1-42',
    imgWrapperColor: 'cs-period10-third'
  },
  {
    title: 'Messianic Fulfillment',
    desc: '<div>The coming of the promised messiah Jesus Christ and the redemption of humanity</div>',
    books: 'Luke',
    img: '/src/assets/bible-timeline/bt-card-p11.jpg',
    primaryColor: 'cs-period11-pri',
    secondaryColor: 'cs-period11-sec',
    textColor: 'text-white',
    toolTipTitle: 'Christ Pantocrator',
    toolTipAuthor: 'Ieremias Palladas (between 1608-1645)',
    toolTipLocation: 'Panagia tou Kastrou, Rhodes, Greece',
    toolTipScripture: 'Revelation 1:8',
    imgWrapperColor: 'cs-period11-third'
  },
  {
    title: 'The Church',
    desc: '<div>The spread of the Christian faith and of the Church—until the End of Time</div>',
    books: 'Acts',
    img: '/src/assets/bible-timeline/bt-card-p12.jpg',
    primaryColor: 'cs-period12-pri',
    secondaryColor: 'cs-period12-sec',
    textColor: 'text-black',
    toolTipTitle: 'The Descent of the Holy Spirit at Pentecost',
    toolTipAuthor: 'Titian (1546)',
    toolTipLocation: 'Santa Maria della Salute Basilica, Venice, Italy',
    toolTipScripture: 'Acts 2:1-47',
    imgWrapperColor: 'cs-period12-third'
  },
];


//code continues (not for config: don't change it)

const timelineDesktop = document.getElementById('timeline-desktop');
const tooltipBox = document.getElementById('timeline-tooltip-box');
const tooltipImgBox = document.getElementById('timeline-tooltip-img-box');
const tooltipHeader = document.getElementById('timeline-tooltip-header');
const tooltipCard = document.getElementById('timeline-tooltip-card');
const tooltipTitle = document.getElementById('timeline-tooltip-title');
const tooltipDesc = document.getElementById('timeline-tooltip-desc');
const tooltipBooks = document.getElementById('timeline-tooltip-books');
const btnPrev = document.getElementById('timeline-tooltip-prev');
const btnNext = document.getElementById('timeline-tooltip-next');
const tooltipImg = document.getElementById('timeline-tooltip-img');
const timelinePeriod = document.getElementById('timeline-tooltip-period');

let currentPeriodIndex = null;
let hideTimeout = null;
let lastPrimary = null;
let lastSecondary = null;
let lastText = null;
let lastImgBox = null;

if (timelineDesktop && tooltipCard) {
  const imgs = timelineDesktop.querySelectorAll('.timeline-period-img');

  function showTooltip(index, anchorImg) {
    const period = timelinePeriods[index];
    if (!period) return;
    // Rimuovi le vecchie classi colore
    if (lastPrimary) tooltipBox.classList.remove(`bg-${lastPrimary}`);
    if (lastSecondary) tooltipHeader.classList.remove(`bg-${lastSecondary}`);
    if (lastText) tooltipCard.classList.remove(lastText);
    if (lastImgBox) tooltipImgBox.classList.remove(`bg-${lastImgBox}`);
    // Aggiungi le nuove classi colore
    tooltipBox.classList.add(`bg-${period.primaryColor}`);
    tooltipHeader.classList.add(`bg-${period.secondaryColor}`);
    tooltipImgBox.classList.add(`bg-${period.imgWrapperColor}`);
    tooltipCard.classList.add(period.textColor);
    // Aggiorna i tracker
    lastPrimary = period.primaryColor;
    lastSecondary = period.secondaryColor;
    lastText = period.textColor;
    lastImgBox = period.imgWrapperColor;
    currentPeriodIndex = index;
    tooltipTitle.textContent = period.title;
    tooltipDesc.innerHTML = period.desc;
    tooltipImg.src = period.img;
    tooltipImg.alt = period.title;
    timelinePeriod.textContent = `${index + 1}`;

    // Populate artwork tooltip information
    const artTitle = document.getElementById('timeline-tooltip-art-title');
    const artAuthor = document.getElementById('timeline-tooltip-art-author');
    const artLocation = document.getElementById('timeline-tooltip-art-location');
    const artScripture = document.getElementById('timeline-tooltip-scripture');

    if (artTitle) artTitle.textContent = period.toolTipTitle || '';
    if (artAuthor) artAuthor.textContent = period.toolTipAuthor || '';
    if (artLocation) artLocation.textContent = period.toolTipLocation || '';
    if (artScripture) artScripture.textContent = period.toolTipScripture || '';

    // Badge libri
    tooltipBooks.innerHTML = '';
    period.books.split(',').forEach(book => {
      const span = document.createElement('span');
      span.textContent = book.trim();
      span.className = `first:ml-0 cs-box-timeline-chip bg-${period.secondaryColor}`;
      tooltipBooks.appendChild(span);
    });
    // Posiziona la card sotto l'immagine attiva
    const rect = anchorImg.getBoundingClientRect();
    const viewportWidth = window.innerWidth;
    const parentRect = timelineDesktop.getBoundingClientRect();
    const cardWidth = tooltipCard.offsetWidth || 400; // fallback se non ancora renderizzata
    // posizione ideale centrata
    let left = rect.left + (rect.width / 2) - (cardWidth / 2);
    // correzione se esce a sinistra
    if (left < 10) {
      left = 10; // 10px padding from left edge of viewport
    } else if (left + cardWidth > viewportWidth - 10) {
      left = viewportWidth - cardWidth - 30; // 10px padding from right edge
    }
    // correzione se esce a destra
    const relativeLeft = left - parentRect.left;

    tooltipCard.style.left = `${relativeLeft}px`;
    tooltipCard.style.top = `calc(${rect.bottom - parentRect.top + TOP_OFFSET}px)`;
    // Mostra la card con transizione
    tooltipCard.classList.remove('hidden');
    setTimeout(() => {
      tooltipCard.classList.add('opacity-100');
      tooltipCard.classList.remove('opacity-0');
    }, 10);
    // Gestisci pulsanti
    btnPrev.disabled = index === 0 ? 'disabled' : '';
    btnNext.disabled = index === timelinePeriods.length - 1 ? 'disabled' : '';
  }

  function hideTooltip() {
    tooltipCard.classList.remove('opacity-100');
    tooltipCard.classList.add('opacity-0');
    hideTimeout = setTimeout(() => {
      tooltipCard.classList.add('hidden');
    }, FADE_DURATION);
  }

  imgs.forEach((img, idx) => {
    img.addEventListener('mouseenter', (e) => {
      clearTimeout(hideTimeout);
      showTooltip(idx, img);
    });
    img.addEventListener('mouseleave', (e) => {
      hideTimeout = setTimeout(hideTooltip, 200);
    });
  });
  tooltipCard.addEventListener('mouseenter', () => {
    clearTimeout(hideTimeout);
  });
  tooltipCard.addEventListener('mouseleave', () => {
    hideTimeout = setTimeout(hideTooltip, 200);
  });
  btnPrev.addEventListener('click', (e) => {
    e.stopPropagation();
    if (currentPeriodIndex > 0) {
      showTooltip(currentPeriodIndex - 1, imgs[currentPeriodIndex - 1]);
    }
  });
  btnNext.addEventListener('click', (e) => {
    e.stopPropagation();
    if (currentPeriodIndex < timelinePeriods.length - 1) {
      showTooltip(currentPeriodIndex + 1, imgs[currentPeriodIndex + 1]);
    }
  });
}


// === START OF IMAGE ANIMATION FOR BIBLE TIMELINE ===
// Add this at the end of your JavaScript file

// Timeline sequential fade-in animation configuration
const TIMELINE_ANIMATION = {
  initialDelay: 0,  // Delay before the first image appears (ms)
  itemDelay: 100,     // Delay between each image appearance (ms)
  fadeDuration: 600,  // Duration of each fade animation (ms)
  easing: 'ease-in-out' // Animation timing function
};

const SHADOW_ANIMATION = {
    delay: 2000,        // Delay before the shadow appears (ms)
}

// Animation config for the "timeline-characters" image
const TIMELINE_CHARACTERS_ANIMATION = {
  delay: 1000,        // Delay before the characters image appears (ms)
  fadeDuration: 2000, // Duration of the fade animation (ms)
  slideDuration: 1600,  // Duration of the slide animation (ms)
  slideDistance: '100px', // Distance to slide from left
  easing: 'ease-in-out'
};

// Function to animate the timeline images
function animateTimelineImages() {
  const timelineContainer = document.getElementById('timeline-desktop');
  if (!timelineContainer) return;

  const images = timelineContainer.querySelectorAll('.timeline-period-img');
  if (!images.length) return;

  // Set initial state - all images invisible
  images.forEach(img => {
    img.style.opacity = '0';
    img.style.transition = `opacity ${TIMELINE_ANIMATION.fadeDuration}ms ${TIMELINE_ANIMATION.easing}`;
    img.style.display = 'block'; // Ensure display is set correctly
  });

  // Animate each image sequentially
  let delay = TIMELINE_ANIMATION.initialDelay;

  images.forEach((img, index) => {
    setTimeout(() => {
      img.style.opacity = '1';
    }, delay);

    delay = TIMELINE_ANIMATION.itemDelay * (index +1); // Increment delay for each image
  });

  setTimeout(() => {
    document.getElementById('timeline-desktop').classList.add('shadow-cs-bible-timeline');
  }, SHADOW_ANIMATION.delay);

  // Animate the "timeline-characters" image independently
  const charactersImg = document.getElementById('timeline-characters');
  if (charactersImg) {
    // Set initial state
    charactersImg.style.opacity = '0';
    charactersImg.style.transform = `translateX(-${TIMELINE_CHARACTERS_ANIMATION.slideDistance})`;
    charactersImg.style.transition = `opacity ${TIMELINE_CHARACTERS_ANIMATION.fadeDuration}ms ${TIMELINE_CHARACTERS_ANIMATION.easing}`;
    charactersImg.style.transition = `
      opacity ${TIMELINE_CHARACTERS_ANIMATION.fadeDuration}ms ${TIMELINE_CHARACTERS_ANIMATION.easing},
      transform ${TIMELINE_CHARACTERS_ANIMATION.slideDuration}ms ${TIMELINE_CHARACTERS_ANIMATION.easing}
    `;
    charactersImg.style.display = 'block';

    setTimeout(() => {
      charactersImg.style.opacity = '1';
      charactersImg.style.transform = 'translateX(0)';
    }, TIMELINE_CHARACTERS_ANIMATION.delay);
  }
}

// Optional: Re-trigger animation if timeline becomes visible after being hidden
// This uses the Intersection Observer API for better performance
function setupTimelineObserver() {
  const timeline = document.getElementById('timeline-desktop');
  if (!timeline) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateTimelineImages();
        observer.unobserve(entry.target); // Only trigger once
      }
    });
  }, {
    threshold: 0.2 // Trigger when at least 20% of the timeline is visible
  });

  observer.observe(timeline);
}

setupTimelineObserver();