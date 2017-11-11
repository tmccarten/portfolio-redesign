// Get initial header height //
var headerHeight = document.querySelector('.header-container').offsetHeight;

// ----- Scroll up button ----- //
var scrollUp = document.getElementsByClassName('scroll-up')[0];

scrollUp.addEventListener('click', function() {
  window.scroll ({
    top: 0,
    left: 0,
    behavior: 'smooth'
  });
});

// ----- //

// ----- Menu ----- //

var btnMenu = document.getElementById('btnMenu');

btnMenu.addEventListener('click', function() {
  var mainNav = document.getElementById('mainNav');
  var menuLineOne = document.getElementsByClassName('btn-menu__line')[0];
  var menuLineTwo = document.getElementsByClassName('btn-menu__line')[1];
  var menuLineThree = document.getElementsByClassName('btn-menu__line')[2];

  if (mainNav.className === "main-nav") {
    mainNav.className = "main-nav main-nav--expanded";
    menuLineOne.className = "btn-menu__line btn-menu__line--leftcross";
    menuLineTwo.className = "btn-menu__line btn-menu__line--vanished";
    menuLineThree.className = "btn-menu__line btn-menu__line--rightcross";
    btnMenu.setAttribute('aria-expanded', true);
  } else {
    mainNav.className = "main-nav";
    menuLineOne.className = "btn-menu__line";
    menuLineTwo.className = "btn-menu__line";
    menuLineThree.className = "btn-menu__line";
    btnMenu.setAttribute('aria-expanded', false);
  }
}, false);

// ----- //


// ----- Scroll calculations ----- //

function getDocHeight() {
    var D = document;
    return Math.max(
        D.body.scrollHeight, D.documentElement.scrollHeight,
        D.body.offsetHeight, D.documentElement.offsetHeight,
        D.body.clientHeight, D.documentElement.clientHeight
    );
}

var winHeight, docHeight, trackLength, throttleScroll;

function getMeasurements(){
	winHeight = window.innerHeight;
	docHeight = getDocHeight();
	trackLength = docHeight - winHeight;
}

function amountScrolled(){
	var scrollTop = window.pageYOffset;
	var pctScrolled = Math.floor(scrollTop/trackLength * 100); // gets percentage scrolled (ie: 80 or NaN if tracklength == 0)
	return pctScrolled;
}

getMeasurements();

window.addEventListener("resize", function(){
	getMeasurements();
}, false);

// ----- //

// ----- Scroll events ----- //

window.addEventListener("scroll", function(){
	clearTimeout(throttleScroll);

	throttleScroll = setTimeout(function(){ // throttle code inside scroll to once every 50 milliseconds
		amountScrolled();
	}, 500);

  // Fixed header on scroll //

  var header = document.querySelector('.header-container'),
      main = document.getElementsByClassName('main')[0];

  if (window.pageYOffset > 500) {
    main.style.paddingTop = headerHeight + "px";
    header.className = "header-container header-container--fixed header-container--fade";
    scrollUp.className = "scroll-up scroll-up--visible" // make scroll-up button visible
  } else if (window.pageYOffset < 500 && header.className === "header-container header-container--fixed header-container--fade") {
    header.className = "header-container header-container--fixed header-container--fade header-container--fadeout";
  } else if (window.pageYOffset < 300 && header.className === "header-container header-container--fixed header-container--fade header-container--fadeout") {
    header.className = "header-container";
    main.style.paddingTop = 0;
  } else {
    scrollUp.className = "scroll-up";
  }

  // Move share buttons on scroll //

    var mq = window.matchMedia( "(min-width: 52em)" ),
        share = document.getElementsByClassName('blogpost__share')[0];

      if (share === undefined) {
        return;
      } else {
        if (mq.matches === false) {
          share.style.justifyContent = "space-around";
        } else if (mq.matches && amountScrolled() > 50) {
            share.style.justifyContent = "flex-end";
          } else {
            share.style.justifyContent = "flex-start";
          }
      }
}, false);
