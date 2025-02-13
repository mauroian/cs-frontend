/*
  DEFINE CONSTANT TO CHANGE DINAMICALLY THE ANIMATION OF THE MENU
 */
const MENU_LEVEL_2_DELAY = 250;
const MENU_LEVEL_2_DURATION = 500;
const MENU_LEVEL_3_DELAY = 50;
const MENU_LEVEL_3_DURATION = 200;
const CLOSE_OTHER_MENUS = true;

// For click event and also reference for outer div tag
const btn = document.querySelector("button.cs-mobile-menu-button");
const menu = document.querySelector("ul.cs-mobile-menu");
const loggedMenuBtn = document.querySelector('.cs-logged-avatar');
const loggedMenu = document.querySelector('.cs-menu-logged');

/** function to close the menu when clicking outside **/
function onClickOutside(cb) {
  document.addEventListener('click', event => {
    if (!loggedMenu.contains(event.target) && !loggedMenuBtn.contains(event.target)) cb();
  });
}

/** function to toggle the menu with animation **/
const menuToggle = (element) => {
  if (element.style.display === "none" || element.style.display === "") {
    element.style.display = "block";
    setTimeout(() => {
      element.style.transition = `all ${MENU_LEVEL_2_DURATION}ms ease-in-out`;
      element.style.opacity = 1;
    } , 50);
  } else {
    element.style.transition = `all ${MENU_LEVEL_2_DURATION}ms ease-in-out`;
    element.style.opacity = 0;
    setTimeout(() => {
      element.style.display = "none";
      delete element.style.transition;
    }, MENU_LEVEL_2_DURATION);
  }
}

btn.addEventListener("click", () => {
  menuToggle(menu);
});

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

const closeOtherMenu = (menu) => {
  menu.style.display = 'none';
  menu.style.opacity = 0;
  menu.classList.remove('active');
  delete menu.style.transition;
}

document.addEventListener("DOMContentLoaded", () => {

  /** convert to mouseenter and mouseleave **/
  document.querySelectorAll('.group.inline-block').forEach(item => {
    item.addEventListener('mouseenter', () => {
      const menu = item.querySelector('ul.cs-menu-level2');
      if (menu) {
        menu.style.display = 'block';
        setTimeout(() => {
          menu.style.transition = `opacity ${MENU_LEVEL_2_DURATION}ms ease`;
          menu.style.opacity = 1;
        }, MENU_LEVEL_2_DELAY);
      }
    });

    item.addEventListener('mouseleave', () => {
      const menu = item.querySelector('ul.cs-menu-level2');
      if (menu) {
        setTimeout(() => {
          menu.style.transition = `opacity ${MENU_LEVEL_2_DURATION}ms ease`;
          menu.style.opacity = 0;
          setTimeout(() => {
            menu.style.display = 'none';
          }, MENU_LEVEL_2_DURATION);
        }, MENU_LEVEL_2_DELAY);
      }
    });
  });

  document.querySelectorAll('.cs-dropdown').forEach(item => {
    item.addEventListener('mouseenter', () => {
      const menu = item.querySelector('ul.cs-menu-level3');
      if (menu) {
        menu.style.display = 'block';
        setTimeout(() => {
          menu.style.transition = `opacity ${MENU_LEVEL_3_DURATION}ms ease`;
          menu.style.opacity = 1;
        }, MENU_LEVEL_3_DELAY);
      }
    });

    item.addEventListener('mouseleave', () => {
      const menu = item.querySelector('ul.cs-menu-level3');
      if (menu) {
        setTimeout(() => {
          menu.style.transition = `opacity ${MENU_LEVEL_3_DURATION}ms ease`;
          menu.style.opacity = 0;
          setTimeout(() => {
            menu.style.display = 'none';
          }, MENU_LEVEL_3_DURATION);
        }, MENU_LEVEL_3_DELAY);
      }
    });
  });

  /** logic to trigger the opening and close of the menu items **/
  document.querySelectorAll('.cs-mobile-menu-button').forEach(button => {
    button.addEventListener('click', function() {
      const menu = this.nextElementSibling;
      if (menu) {
       if(CLOSE_OTHER_MENUS) {
         if (menu.classList.contains('cs-inner')) {
           document.querySelectorAll('ul.active.cs-inner').forEach(activeMenu => {
             if(activeMenu !== menu) {
               closeOtherMenu(activeMenu);
             }
           });
           document.querySelectorAll('.cs-active').forEach(activeItem => {
             if(activeItem !== this) {
               activeItem.classList.remove('cs-active');
             }
           });
         } else {
           document.querySelectorAll('ul.active').forEach(activeMenu => {
             if(activeMenu !== menu) {
               closeOtherMenu(activeMenu);
             }
           });
           document.querySelectorAll('.cs-active').forEach(activeItem => {
             if(activeItem !== this) {
               activeItem.classList.remove('cs-active');
             }
           });
         }
       }

        if (menu.classList.contains('active')) {
          menuToggle(menu);
          menu.classList.remove('active');
          this.classList.remove('cs-active');
        } else {
          menu.classList.add('active');
          this.classList.add('cs-active');
          menuToggle(menu);
        }
      }
    });
  });

  document.querySelectorAll('.cs-logged-nested').forEach(button => {
    button.addEventListener('click', function() {
      const menu = this.querySelector(".dropdown-menu");
      if (menu) {
        if(CLOSE_OTHER_MENUS) {
          document.querySelectorAll('ul.dropdown-menu.active').forEach(activeMenu => {
            if(activeMenu !== menu) {
              closeOtherMenu(activeMenu);
            }
          });
          document.querySelectorAll('.cs-active').forEach(activeItem => {
            if(activeItem !== this) {
              activeItem.classList.remove('cs-active');
            }
          });
        }
        if (menu.classList.contains('active')) {
          menuToggle(menu);
          menu.classList.remove('active');
          this.classList.remove('cs-active');
        } else {
          menu.classList.add('active');
          this.classList.add('cs-active');
          menuToggle(menu);
        }
      }
    });
  });
});