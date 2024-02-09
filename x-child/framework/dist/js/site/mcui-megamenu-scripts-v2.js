//mcui-megamenu-scripts
"use strict";

var $j = jQuery;

//START:Prevents an href=# from scrolling to the top of the page
$j('nav a[href="#"]').click(function (e) {
  e.preventDefault();
});
//END

// main navigation links
var links = Array.from(document.querySelectorAll('.bar .left .linkBucket'));
// navigation containing div
var navigation = document.querySelector('.mainMenu');
// drawer links
var drawerLinks = Array.from(document.querySelectorAll('.links-drawer .drawer-btn'));
// drawers
var drawers = Array.from(document.querySelectorAll('.drawer'));
// search searchButton
var searchButton = document.querySelector('.search-link .search-trigger .search-open');
// search searchButton
var searchButtonClose = document.querySelector('.search-link .search-trigger .search-close');
// search container
var searchdiv = document.querySelector('.search-link');
// search input
var searchInput = document.querySelector('.search-link .field input');
//Language Container
var langContainer = document.querySelector('.lang');
//Language Button
var langButton = document.querySelector('.lang .lang-button');
//Language Button
var langContent = document.querySelector('.lang .lang-content');

//Mobile navigation
// nav button for mobile
var mobileButton = document.querySelector('.nav-button');
// mobile nav
var mobileNav = document.querySelector('.mainMenu .bar');
//Returns the mobile Nav to default
var mobileMenuReturn = Array.from(document.querySelectorAll('.menu .mainLink-return'));
var mobileDrawerReturn = Array.from(document.querySelectorAll('.drawer .mobile-menu-return'));
var mobileSearchInput = document.getElementById('searchterm');
var windowWidth = window.innerWidth;
// Is it mobile
var isMobile = windowWidth >= 992 ? false : true;


// START: Accessible tabindex support
// var linkBucketLinks = $j('.mainMenu .mainLink');
var topLevelLinks = $j('.mainMenu .drawer-btn');
var subLevelLinks = $j('.mainMenu .drawer a');
// var mobileMenuReturn = $j('.mainMenu .mobile-menu-return');
// var mainLinkReturn = $j('.mainMenu .mainLink-return');

// console.log({topLevelLinks}, {subLevelLinks});
$j(topLevelLinks).attr('tabindex', '0');
$j(subLevelLinks).attr('tabindex', '-1');
// $j(mobileMenuReturn).attr('tabindex', '0');
// $j(mainLinkReturn).attr('tabindex', '0');

function focusInSubMenu(top, sub, row) {
  console.log('focus in');
  focusOutSubMenu();
  activateSubmenu(row);
  $j('.drawer.' + top).addClass('focus');
  console.log(sub);
  $j(sub).each(function () {
    $j(this).attr('tabindex', '0');
  });
  $j('.drawer.' + top + ' .links-columns a:first').focus();
}

// FocusOut the other submenus
function focusOutSubMenu() {
  $j('.drawer.focus .links-columns a').each(function () {
    $j(this).attr('tabindex', '-1');
  });
  $j('.drawer.focus').removeClass('focus');
}

// If top level links get focus activate the sub level menu
$j(topLevelLinks).focus(function (e) {
  // console.log(e.currentTarget);
  if (!isMobile) {
    activateSubmenu($j(e.currentTarget));
  }
});

$j(topLevelLinks).keydown(function (e) {
  console.log('topLevelLinksKeydown');
  if (e.keyCode == 13) {

    var topClicked = $j(e.currentTarget).data('drawer');
    var topNext = $j(e.currentTarget).next();
    var subLinks = $j('.drawer.' + topClicked + ' .links-columns a');
    // var lastLinkIndex = subLinks.length -1;
    // var lastLink = subLinks[lastLinkIndex];

    // Activate submenu links
    // console.log(topClicked, subLinks, e.currentTarget);
    focusInSubMenu(topClicked, subLinks, e.currentTarget);

    // if Drawer does not have focus
    $j(topNext).blur(function () {
      if ($j(this).parent().hasClass('focus')) {
        console.log('has Class');
      } else {
        console.log('does not have class');
      }
    });
  }
});

// Search button tab accessible
var searchOpenEnter = $j('.search-link .search-trigger .search-open');
var searchCloseEnter = $j('.search-link .search-trigger .search-close');

// If search opened by enter
$j(searchOpenEnter).keydown(function (e) {
  if (e.keyCode == 13) {
    openSearch(e);
    $j(searchOpenEnter).attr('tabindex', '-1');
    $j(searchCloseEnter).attr('tabindex', '0');
  }
});

// If search closed by enter
$j(searchCloseEnter).keydown(function (e) {
  if (e.keyCode == 13) {
    closeSearch(e);
    $j(searchCloseEnter).attr('tabindex', '-1');
    $j(searchOpenEnter).attr('tabindex', '0');
  }
});
// END: Accessible tabindex support


// START: This section is for the mcui-MegaMenu interactions
// opening navigation functionality
var opened = null;
var overlay = document.getElementById('menuOverlay');
links.forEach(function (x) {
  overlay.addEventListener('click', function () {
    this.classList.remove('show');
    links.forEach(function (v) {
      v.classList.remove('open');
    });
    opened = null;
  });
});


function openCloseMainMenu(x, that) {
  var timer;

  // console.log(x, that, opened);

  timer = setTimeout(function () {
    var menu = that;

    if (!opened) {
      // no menu item is shown
      opened = menu;
      // console.log('!opened');
      opened.parentElement.classList.toggle('open');
      overlay.classList.add('show');
      x.querySelector('.links-drawer').classList.add('opened');
    } else if (menu === opened) {
      // the clicked item is already showing
      // console.log('menu === opened');
      menu.parentElement.classList.toggle('open');
      overlay.classList.remove('show');
      opened = null;
    } else {
      //debugger;
      // the clicked item is hiddden but another one is showing
      // console.log('switch');
      opened.parentElement.classList.toggle('open');
      opened = menu;
      opened.parentElement.classList.toggle('open');
    }

    // IF MOBILE remove the open drawer and selected submenu
    if (isMobile) {
      drawers.forEach(function (n) {
        if (n.classList.contains('open')) {
          n.classList.remove('open');
        }
      });
      drawerLinks.forEach(function (n) {
        if (n.classList.contains('selected')) {
          n.classList.remove('selected');
        }
      });
    }
  }, 100);
}

links.forEach(function (x) {
  x.querySelector('.mainLink').addEventListener('click', function () {
    closeMobileSearch();
    openCloseMainMenu(x, this);
    if (langContainer) {
      langContainer.classList.remove('open');
    }
  });
  x.querySelector('.mainLink').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      openCloseMainMenu(x, this);
      if (langContainer) {
        langContainer.classList.remove('open');
      }
    }
  });
});


// nav scrolling functionality
window.addEventListener('scroll', function () {
  if (window.scrollY > 300 && !isMobile) {
    if (navigation && !navigation.classList.contains('scrolled')) {
      navigation.classList.add('scrolled');
    }
  } else {
    if (navigation && navigation.classList.contains('scrolled')) {
      navigation.classList.remove('scrolled');
    }
  }
});


// Search Functions
function openSearch(e) {
  if (searchdiv) {
    searchdiv.classList.add('open');
    navigation.classList.add('search-open');
    searchInput.focus();
  }
}
function closeSearch(e) {
  if (searchdiv) {
    searchdiv.classList.remove('open');
    navigation.classList.remove('search-open');
  }
}
// search button open click
if (searchButton) {
  searchButton.addEventListener('click', function (e) {
    e.preventDefault();
    openSearch(e);
  });
}
// search button close click
if (searchButtonClose) {
  searchButtonClose.addEventListener('click', function (e) {
    e.preventDefault();
    closeSearch(e);
  });
}


// language button hover
$j('.lang-button').on('click', function (e) {
  e.preventDefault();
  $j('.lang').toggleClass('open');
  var langSelector = $j('.language-nav-selector');
  if ($j('.lang').hasClass('open')) {
    langSelector.each(function () {
      $j(this).attr('tabindex', '0');
    });
  } else {
    langSelector.each(function () {
      $j(this).attr('tabindex', '-1');
    });
  }
});


// language mouseleave
if (langContent && langContainer) {
  langContent.addEventListener('mouseleave', function (e) {
    langContainer.classList.remove('open');
  });
}

// Deactivate any open drawers or submenu when mobile button clicked
function deactivateMobileSubmenu() {
  //   console.log('deactivateMobileSubmenu');
  drawers.forEach(function (n) {
    if (n.classList.contains('open')) {
      n.classList.remove('open');
    }
  });
  drawerLinks.forEach(function (n) {
    var ld = n.closest('.links-drawer');
    if (ld.classList.contains('opened')) {
      ld.classList.remove('opened');
    }
    if (n.classList.contains('selected')) {
      n.classList.remove('selected');
    }
  });
  links.forEach(function (n) {
    if (n.classList.contains('open')) {
      n.classList.remove('open');
    }
  });
  opened = null;
}

// mobile functionality
if (mobileButton) {
  mobileButton.addEventListener('click', function () {
    //   console.log('mobile button clicked');
    if (mobileNav) {
      mobileNav.classList.toggle('open');
      deactivateMobileSubmenu();
    }
  });
}
// Remove open class on Desktop
// window.addEventListener("resize", function () {
//     windowWidth = window.innerWidth;
//     if (!isMobile) {
//         mobileNav.classList.remove('open');
//     }
// });

if (mobileMenuReturn) {
  mobileMenuReturn.forEach(function (m) {
    m.addEventListener('click', function () {
      deactivateMobileSubmenu();
    });
  });
}

if (mobileDrawerReturn) {
  mobileDrawerReturn.forEach(function (m) {
    m.addEventListener('click', function () {
      drawers.forEach(function (n) {
        n.classList.remove('open');
      });
      opened = null;
    });
  });
}

function closeMobileSearch() {
  console.log('closing mobile search');
  if (navigation && mobileSearchInput) {
    $j('nav.mainMenu').find('.navContent').removeClass('mobile-search-open');
  }
}

function mobileSearch(event) {
  windowWidth = window.innerWidth;
  var target = event.target;
  if (windowWidth < 992) {
    $j(target).closest('.navContent').addClass('mobile-search-open');
  } else {
    $j(target).closest('.navContent').removeClass('mobile-search-open');
  }
}

// This is the handling of search in mobile
if (mobileSearchInput) {
  mobileSearchInput.addEventListener('click', function (event) {
    mobileSearch(event);
  });
}
// END: This section is for the mcui-MegaMenu interactions

function checkMobile() {
  var wasMobile = isMobile;
  isMobile = windowWidth >= 992 ? false : true;
  //   change selectors to mobile
  if (isMobile) {
    activateMobileListeners();
  } else if (wasMobile) {
    deactivateMobileListeners();
  }
}

window.addEventListener("resize", function () {
  windowWidth = window.innerWidth;
  checkMobile(windowWidth);
});
checkMobile();


// START: This section is for the mcui-menuaim or mouse intent
(function ($) {

  $.fn.menuAim = function (opts) {
    // Initialize menu-aim for all elements in jQuery collection
    this.each(function () {
      init.call(this, opts);
    });

    return this;
  };

  function init(opts) {
    var $menu = $j(this),
      activeRow = $.noop,
      mouseLocs = [],
      lastDelayLoc = null,
      timeoutId = null,
      options = $.extend({
        rowSelector: "> .drawer-btn",
        submenuSelector: "*",
        submenuDirection: "right",
        tolerance: 100, // bigger = more forgivey when entering submenu
        enter: $.noop,
        exit: $.noop,
        activate: $.noop,
        deactivate: $.noop,
        exitMenu: $.noop
      }, opts);

    var MOUSE_LOCS_TRACKED = 3, // number of past mouse locations to track
      DELAY = 300; // ms delay when user appears to be entering submenu

    var mousemoveDocument = function (e) {
      mouseLocs.push({ x: e.pageX, y: e.pageY });

      if (mouseLocs.length > MOUSE_LOCS_TRACKED) {
        mouseLocs.shift();
      }
    };

    var mouseleaveMenu = function () {
      if (timeoutId) {
        clearTimeout(timeoutId);
      }

      // If exitMenu is supplied and returns true, deactivate the
      // currently active row on menu exit.
      if (options.exitMenu(this)) {
        if (activeRow) {
          options.deactivate(activeRow);
        }

        activeRow = null;
      }
    };

    /**
     * Trigger a possible row activation whenever entering a new row.
     */
    var mouseenterRow = function () {
        if (timeoutId) {
          // Cancel any previous activation delays
          clearTimeout(timeoutId);
        }

        options.enter(this);
        possiblyActivate(this);
      },
      mouseleaveRow = function () {
        options.exit(this);
      };

    /*
     * Immediately activate a row if the user clicks on it.
     */
    var clickRow = function () {
      activate(this);
    };

    /**
     * Activate a menu row.
     */
    var activate = function (row) {
      if (row == activeRow) {
        return;
      }

      if (activeRow) {
        options.deactivate(activeRow);
      }

      options.activate(row);
      activeRow = row;
    };

    /**
     * Possibly activate a menu row. If mouse movement indicates that we
     * shouldn't activate yet because user may be trying to enter
     * a submenu's content, then delay and check again later.
     */
    var possiblyActivate = function (row) {
      var delay = activationDelay();

      if (delay) {
        timeoutId = setTimeout(function () {
          possiblyActivate(row);
        }, delay);
      } else {
        activate(row);
      }
    };

    /**
     * Return the amount of time that should be used as a delay before the
     * currently hovered row is activated.
     *
     * Returns 0 if the activation should happen immediately. Otherwise,
     * returns the number of milliseconds that should be delayed before
     * checking again to see if the row should be activated.
     */
    var activationDelay = function () {
      if (!activeRow || !$j(activeRow).is(options.submenuSelector)) {
        // If there is no other submenu row already active, then
        // go ahead and activate immediately.
        return 0;
      }

      var offset = $menu.offset(),
        upperLeft = {
          x: offset.left,
          y: offset.top - options.tolerance
        },
        upperRight = {
          x: offset.left + $menu.outerWidth(),
          y: upperLeft.y
        },
        lowerLeft = {
          x: offset.left,
          y: offset.top + $menu.outerHeight() + options.tolerance
        },
        lowerRight = {
          x: offset.left + $menu.outerWidth(),
          y: lowerLeft.y
        },
        loc = mouseLocs[mouseLocs.length - 1],
        prevLoc = mouseLocs[0];

      if (!loc) {
        return 0;
      }

      if (!prevLoc) {
        prevLoc = loc;
      }

      if (prevLoc.x < offset.left || prevLoc.x > lowerRight.x ||
      prevLoc.y < offset.top || prevLoc.y > lowerRight.y) {
        // If the previous mouse location was outside of the entire
        // menu's bounds, immediately activate.
        return 0;
      }

      if (lastDelayLoc &&
      loc.x == lastDelayLoc.x && loc.y == lastDelayLoc.y) {
        // If the mouse hasn't moved since the last time we checked
        // for activation status, immediately activate.
        return 0;
      }

      // Detect if the user is moving towards the currently activated
      // submenu.
      //
      // If the mouse is heading relatively clearly towards
      // the submenu's content, we should wait and give the user more
      // time before activating a new row. If the mouse is heading
      // elsewhere, we can immediately activate a new row.
      //
      // We detect this by calculating the slope formed between the
      // current mouse location and the upper/lower right points of
      // the menu. We do the same for the previous mouse location.
      // If the current mouse location's slopes are
      // increasing/decreasing appropriately compared to the
      // previous's, we know the user is moving toward the submenu.
      //
      // Note that since the y-axis increases as the cursor moves
      // down the screen, we are looking for the slope between the
      // cursor and the upper right corner to decrease over time, not
      // increase (somewhat counterintuitively).
      function slope(a, b) {
        return (b.y - a.y) / (b.x - a.x);
      };

      var decreasingCorner = upperRight,
        increasingCorner = lowerRight;

      // Our expectations for decreasing or increasing slope values
      // depends on which direction the submenu opens relative to the
      // main menu. By default, if the menu opens on the right, we
      // expect the slope between the cursor and the upper right
      // corner to decrease over time, as explained above. If the
      // submenu opens in a different direction, we change our slope
      // expectations.
      if (options.submenuDirection == "left") {
        decreasingCorner = lowerLeft;
        increasingCorner = upperLeft;
      } else if (options.submenuDirection == "below") {
        decreasingCorner = lowerRight;
        increasingCorner = lowerLeft;
      } else if (options.submenuDirection == "above") {
        decreasingCorner = upperLeft;
        increasingCorner = upperRight;
      }

      var decreasingSlope = slope(loc, decreasingCorner),
        increasingSlope = slope(loc, increasingCorner),
        prevDecreasingSlope = slope(prevLoc, decreasingCorner),
        prevIncreasingSlope = slope(prevLoc, increasingCorner);

      if (decreasingSlope < prevDecreasingSlope &&
      increasingSlope > prevIncreasingSlope) {
        // Mouse is moving from previous location towards the
        // currently activated submenu. Delay before activating a
        // new menu row, because user may be moving into submenu.
        lastDelayLoc = loc;
        return DELAY;
      }

      lastDelayLoc = null;
      return 0;
    };

    /**
     * Hook up initial menu events
     */
    $menu.
    mouseleave(mouseleaveMenu).
    find(options.rowSelector).
    mouseenter(mouseenterRow).
    mouseleave(mouseleaveRow).
    click(clickRow);

    $j(document).mousemove(mousemoveDocument);

  };
})(jQuery);


if (!isMobile) {
  $j(".links-drawer").menuAim({
    activate: activateSubmenu,
    deactivate: deactivateSubmenu
  });
}


function activateSubmenu(row) {
  console.log('activateSubmenu');
  var $parent = $j(row).closest('.js-linkBucket.open').attr('id');
  var parentActive = $j("#" + $parent + " .menu");

  //search for active section to deactivate in case not initialized
  parentActive.find('.links-drawer .selected').removeClass('selected');
  parentActive.find('.middle-column .drawer.open').removeClass('open');

  var $row = $j(row),
    submenuClass = $row.data("drawer"),
    $submenu = $j(".drawer" + "." + submenuClass);
  $row.addClass("selected");
  $submenu.addClass('open');
  //   console.log($row, submenuClass, $submenu);
}


function deactivateSubmenu(row) {
  console.log('deactivateSubmenu');
  if (row.length === 0) return;

  var $row = $j(row),
    submenuClass = $row.data("drawer"),
    $submenu = $j(".drawer" + "." + submenuClass);
  $row.removeClass('selected');
  $submenu.removeClass('open');
}

// Add mobile event listeners
function activateMobileListeners() {
  // drawerLinks = Array.from(document.querySelectorAll('.links-drawer .mobile-drawer-btn'));
  drawerLinks.forEach(function (x) {
    // console.log(x, x.target, x.classList);
    x.addEventListener('click', (x) => {
      var rowTarget = x.target;
      activateSubmenu(rowTarget);
    });
  });
}
function deactivateMobileListeners() {
  drawerLinks.forEach(function (x) {
    x.removeEventListener('click', (x) => {
      activateSubmenu(x.target);
    });
  });
  $j(".links-drawer").menuAim({
    activate: activateSubmenu,
    deactivate: deactivateSubmenu
  });
}
// END: This section is for the mcui-menuaim or mouse intent