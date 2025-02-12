/*
  DEFINE CONSTANT TO CHANGE DINAMICALLY THE ANIMATION OF THE MENU
 */
const MENU_LEVEL_2_DELAY = 250;
const MENU_LEVEL_2_DURATION = 500;
const MENU_LEVEL_3_DELAY = 50;
const MENU_LEVEL_3_DURATION = 200;

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

/** here you can define the animation for the menu **/
const menuToggle = (element) => {
  $(element).slideToggle("fast");
}


btn.addEventListener("click", () => {
  menuToggle(menu);
});


if(loggedMenuBtn) {
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

document.addEventListener("DOMContentLoaded", () => {

  /** convert to mouseenter and mouseleave **/
  $('.group.inline-block').hover(function() {
    $(this).find('ul.cs-menu-level2').stop(true, true).delay(MENU_LEVEL_2_DELAY).fadeIn(MENU_LEVEL_2_DURATION);
  }, function() {
    $(this).find('ul.cs-menu-level2').stop(true, true).delay(MENU_LEVEL_2_DELAY).fadeOut(MENU_LEVEL_2_DURATION);
  });



  $('.cs-dropdown').hover(function() {
    $(this).find('ul.cs-menu-level3').stop(true, true).delay(MENU_LEVEL_3_DELAY).fadeIn(MENU_LEVEL_3_DURATION);
  }, function() {
    $(this).find('ul.cs-menu-level3').stop(true, true).delay(MENU_LEVEL_3_DELAY).fadeOut(MENU_LEVEL_3_DURATION);
  });


  /** logic to trigger the opening and close of the menu items **/
  $('.cs-mobile-menu-button').on('click', function() {
    const menu = $(this).next("ul.cs-mobile-menu");
    if (menu) {
      if(menu.hasClass('cs-inner')) {
        $('ul.active.cs-inner').slideUp("fast");
        $('ul.active.cs-inner').not(menu).removeClass('active');
        $(this).parents('li').find('.cs-active').removeClass("cs-active");
      } else {
        $('ul.active').slideUp("fast");
        $('ul.active').not(menu).removeClass('active');
        $("ul.cs-mobile-menu").find('.cs-active').removeClass("cs-active");

      }
      if(menu.hasClass('active')){
        menu.slideUp("fast");
        menu.removeClass('active');
        $(this).removeClass("cs-active");
      } else {
        $(menu).addClass('active');
        $(this).addClass("cs-active");
        menuToggle(menu);
      }
    }
  });


  $('.cs-logged-nested').on('click', function() {
    const menu = $(this).find(".dropdown-menu");
    if (menu) {
        $('ul.dropdown-menu.active').slideUp("fast");
        $('ul.dropdown-menu.active').not(menu).removeClass('active');
        $(".cs-menu-logged-items").find('.cs-active').removeClass("cs-active");
      }
      if(menu.hasClass('active')){
        menu.slideUp("fast");
        menu.removeClass('active');
        $(this).removeClass("cs-active");
      } else {
        $(menu).addClass('active');
        $(this).addClass("cs-active");
        menuToggle(menu);
      }
  });

  /** logic to trigger the opening and close of the logged menu items **/
 /* const loggedMenuItems = document.querySelectorAll('.cs-logged-nested');
  loggedMenuItems.forEach(button => {
    button.addEventListener("click", function () {
      const closeMenu = document.querySelectorAll(".dropdown-menu");
      closeMenu.forEach(menu => {
        if (menu !== this.closest("li") && menu.style.display !== "none" && menu !== this) {
          //menu.style.display = "none";
          $(menu).slideUp("fast");
          menu.previousElementSibling.classList.remove("cs-active");
        }
      });
      const menu = $(button).next(".dropdown-menu");
      if (menu) {
        button.classList.toggle("cs-active");
        menuToggle(menu);
      }
    });
  });*/


});