// Get initial header height //
var headerHeight = document.getElementById('header').offsetHeight;

// ----- Menu ----- //

var btnMenu = document.getElementById('btnMenu');

btnMenu.addEventListener('click', function() {
  var mainNav = document.getElementById('mainNav'),
      menuLineOne = document.getElementsByClassName('btn-menu__line')[0],
      menuLineTwo = document.getElementsByClassName('btn-menu__line')[1],
      menuLineThree = document.getElementsByClassName('btn-menu__line')[2];

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

window.onload = function() {
  getMeasurements();
  addScrollButton();
};

// ------ Dynamically add scroll-to-top button ------ //

function addScrollButton() {
  if (getDocHeight() > 2000 ) {

    var scrollUpDiv = document.createElement('div'),
        main = document.getElementsByClassName('main')[0],
        logo = document.querySelector('.logo');
        img = document.createElement('img');

    scrollUpDiv.className = "scroll-up";
    logoSrc = logo.href; //get root location

    img.src = logoSrc + "assets/img/icons/arrow-up.svg";
    img.className = "scroll-up__icon";
    img.setAttribute("width", 44);
    img.setAttribute("height", 44);
    img.setAttribute("alt", "Scroll to top");

    scrollUpDiv.appendChild(img);
    main.appendChild(scrollUpDiv);

    scrollUpDiv.addEventListener('click', function() {
      window.scroll ({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
    });
  }
}

// ----- //

// ----- Make scroll-to-top visible ----- //

function scrollUpFunction() {

  var scrollUpDiv = document.getElementsByClassName('scroll-up')[0],
      mqLandscape = window.matchMedia("(max-width: 50.75em) and (orientation: landscape)");

  if (scrollUpDiv) {

    if (window.pageYOffset > 500) {
      scrollUpDiv.className = "scroll-up scroll-up--visible";

      if (amountScrolled() > 99 && !mqLandscape.matches ) {
        scrollUpDiv.classList.toggle('avoid-footer');
      } else if (amountScrolled() > 95 && mqLandscape.matches) {
        scrollUpDiv.classList.toggle('avoid-footer');
      }

    } else {
      scrollUpDiv.className = "scroll-up";
    }
  }

}

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

function getMeasurements() {
	winHeight = window.innerHeight;
	docHeight = getDocHeight();
	trackLength = docHeight - winHeight;
}

function amountScrolled() {
	var scrollTop = window.pageYOffset;
	var pctScrolled = Math.floor(scrollTop/trackLength * 100); // gets percentage scrolled (ie: 80 or NaN if tracklength == 0)
	return pctScrolled;
}

window.addEventListener("resize", function(){
	getMeasurements();
  setTimeout(function(){ // throttle code inside scroll to once every 50 milliseconds
		fixedHeader();
	}, 50);
}, false);

// ----- //

// ----- Fixed header ----- //

function fixedHeader() {

  var header = document.getElementById('header'),
      main = document.getElementById('main'),
      mqLandscape = window.matchMedia("(max-width: 50.75em) and (orientation: landscape)");

  if (window.pageYOffset > headerHeight && !mqLandscape.matches) {
    header.classList.add('header-container--fixed');
    main.style.paddingTop = headerHeight + "px";
  } else if (window.pageYOffset < 500 && header.classList.contains('header-container--fixed') && !mqLandscape.matches) {
    header.classList.add('header-container--fadeout');
    header.classList.add('header-container--fade');

    setTimeout(function(){
  		header.classList.remove('header-container--fadeout');
      header.classList.remove('header-container--fixed');
      header.classList.remove('header-container--fade');
      main.style.paddingTop = 0;
  	}, 300);

  } else if (mqLandscape.matches) {
    header.classList.add('header-container--fixed');
    main.style.paddingTop = "5.03125rem";
  }
}

// ----- //

// ----- Scroll events ----- //

window.addEventListener("scroll", function(){

  clearTimeout(throttleScroll);

	throttleScroll = setTimeout(function(){ // throttle code inside scroll to once every 50 milliseconds
		amountScrolled();
    scrollUpFunction();
	}, 50);

  fixedHeader();

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
