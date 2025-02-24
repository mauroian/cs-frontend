/**
  DEFINE CONSTANT TO CHANGE DINAMICALLY THE ANIMATION OF THE MENU
 */
const MENU_LEVEL_2_DELAY = 50;
const MENU_LEVEL_2_DURATION = 200;
const MENU_LEVEL_3_DELAY = 50;
const MENU_LEVEL_3_DURATION = 200;
const MENU_MOBILE_DURATION = 200;
const SIDEBAR_ADMIN_DURATION = 200;
const CLOSE_OTHER_MENUS = false;
const CLOSE_OTHER_MENUS_ADMIN = false;




document.addEventListener("DOMContentLoaded", () => {
  /**
   FUNCTION TO MANAGE THE DESKTOP MENU
   */
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
    exitDelay: MENU_LEVEL_3_DELAY,
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

  /**
   * FUNCTION TO MANAGE THE MOBILE MENU
   */
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
              document.querySelectorAll('ul.active.cs-inner').forEach(activeMenu => {
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
              document.querySelectorAll('ul.active').forEach(activeMenu => {
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

          if (menu.classList.contains('active')) {
            slideToggle(menu, MENU_MOBILE_DURATION);
            menu.classList.remove('active');
            this.classList.remove('cs-active');
          } else {
            menu.classList.add('active');
            this.classList.add('cs-active');
            slideToggle(menu, MENU_MOBILE_DURATION);
          }
        }
      });
    });
  }

  /**
   * FUNCTION TO MANAGE THE USER MENU (BOTH MOBILE AND DESKTOP)
   */
  const loggedMenuBtn = document.querySelector('.cs-logged-avatar');
  const loggedMenu = document.querySelector('.cs-menu-logged');
  if (loggedMenuBtn) {
    onClickOutside(() => {
      loggedMenu.classList.add('invisible');
      loggedMenu.classList.remove('visible');
      loggedMenu.classList.remove("opacity-100");
      loggedMenu.classList.add("opacity-0");
    });

    loggedMenuBtn.addEventListener("click", () => {
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
          document.querySelectorAll('ul.dropdown-menu.active').forEach(activeMenu => {
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
        if (menu.classList.contains('active')) {
          slideToggle(menu, MENU_LEVEL_2_DURATION);
          menu.classList.remove('active');
          this.classList.remove('cs-active');
        } else {
          menu.classList.add('active');
          this.classList.add('cs-active');
          slideToggle(menu, MENU_LEVEL_2_DURATION);
        }
      }
    });
  });
  /** function to close the menu when clicking outside **/
  function onClickOutside(cb) {
    document.addEventListener('click', event => {
      if (!loggedMenu.contains(event.target) && !loggedMenuBtn.contains(event.target)) cb();
    });
  }


  /**
   * ADMIN SIDEBAR MENU
   */
  document.querySelectorAll('.cs-admin-submenu-button').forEach(button => {
    button.addEventListener('click', function () {
      const menu = this.nextElementSibling;
      if (menu) {
        if (CLOSE_OTHER_MENUS_ADMIN) {
            document.querySelectorAll('ul.active').forEach(activeMenu => {
              if (activeMenu !== menu) {
                slideToggle(activeMenu, SIDEBAR_ADMIN_DURATION);
              }
            });
            document.querySelectorAll('.cs-active').forEach(activeItem => {
              if (activeItem !== this) {
                activeItem.classList.remove('cs-active');
              }
            });
        }

        if (menu.classList.contains('active')) {
          slideToggle(menu, SIDEBAR_ADMIN_DURATION);
          menu.classList.remove('active');
          this.classList.remove('cs-active');
        } else {
          menu.classList.add('active');
          this.classList.add('cs-active');
          slideToggle(menu, SIDEBAR_ADMIN_DURATION);
        }
      }
    });
  });

  const expandButton = document.querySelector('.cs-admin-expand');
  if(expandButton !== null) {
    expandButton.addEventListener('click', function () {
      document.querySelectorAll('.cs-admin-submenu-button').forEach(button => {
        if (!button.classList.contains('cs-active')) {
          button.classList.add('cs-active');
        }
      });
      document.querySelectorAll('.cs-admin-submenu').forEach(menu => {
        if (!menu.classList.contains('active')) {
          menu.classList.add('active');
          slideDown(menu, SIDEBAR_ADMIN_DURATION);
        }
      });
    });
  }

  const collapseButton = document.querySelector('.cs-admin-collapse');
  if(collapseButton !== null) {
    collapseButton.addEventListener('click', function () {
      document.querySelectorAll('.cs-admin-submenu-button').forEach(button => {
        if (button.classList.contains('cs-active')) {
          button.classList.remove('cs-active');
        }
      });
      document.querySelectorAll('.cs-admin-submenu').forEach(menu => {
        if (menu.classList.contains('active')) {
          menu.classList.remove('active');
          slideUp(menu, SIDEBAR_ADMIN_DURATION);
        }
      });
    });
  }

  const navbar = document.getElementById("navbar");
  const sidebar = document.getElementById("sidebar");
  const btnSidebarToggler = document.getElementById("btnSidebarToggler");
  const main = document.querySelector(".main-admin");

  if(btnSidebarToggler) {
    console.log('here');
    btnSidebarToggler.addEventListener("click", (e) => {
      e.preventDefault();

      sidebar.classList.toggle("show");
      main.classList.toggle("md:ml-80");
    });

    sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
  }
});


/**
 * FROM HERE AFTER THERE ARE THE FUNCTIONS TO MANAGE THE ANIMATIONS AND SPECIAL JQUERY MIGRATIONS
 */
function toggleAccordion(index) {
  const content = document.getElementById(`content-${index}`);
  const icon = document.getElementById(`icon-${index}`);
  const text = document.querySelectorAll(`.text-${index}`);

  // SVG for Minus icon
  const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

  // SVG for Plus icon
  const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

  //toggle text color
    text.forEach((el) => {
        el.classList.toggle('hidden');
    });

  // Toggle the content's max-height for smooth opening and closing
  if (content.style.maxHeight && content.style.maxHeight !== '0px') {
    content.style.maxHeight = '0';
    icon.innerHTML = plusSVG;
  } else {
    content.style.maxHeight = content.scrollHeight + 'px';
    icon.innerHTML = minusSVG;
  }
}

window.toggleAccordion = toggleAccordion;

const slideUp = (target, duration=500) => {
  target.style.transitionProperty = 'height, margin, padding';
  target.style.transitionDuration = duration + 'ms';
  target.style.boxSizing = 'border-box';
  target.style.height = target.offsetHeight + 'px';
  target.offsetHeight;
  target.style.overflow = 'hidden';
  target.style.height = 0;
  target.style.paddingTop = 0;
  target.style.paddingBottom = 0;
  target.style.marginTop = 0;
  target.style.marginBottom = 0;
  window.setTimeout( () => {
    target.style.display = 'none';
    target.style.removeProperty('height');
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
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
  setTimeout(() => {
    fadeAnime(el, duration, 'fadeOut');
  }, delay);
};

const fadeIn = (el, duration, delay = 0) => {
  setTimeout(() => {
    fadeAnime(el, duration, 'fadeIn');
  }, delay);
};

const fadeToggle = (el, display, duration = 500) => {
    if (window.getComputedStyle(el).display === 'none') {
        return fadeAnime(el, duration, 'fadeIn');
    } else {
        return fadeAnime(el, duration, 'fadeOut');
    }
}

const fadeAnime = async (target, duration, type) => {
  'use strict';

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

  let opacityAnimeValue;
  if(isFadeOut) {
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

  targetStyle.opacity = '';


  if(isFadeOut) {
    targetStyle.display = textNone;
  }
}

// load namespace

const HoverIntent = (function() {

  // constructor
  return function(elements, userConfig) {

    // private members

    const defaultOptions = {
      exitDelay: 200,
      interval: 100,
      sensitivity: 7,
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