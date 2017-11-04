// Menu //

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
	winHeight = window.innerHeight
	docHeight = getDocHeight()
	trackLength = docHeight - winHeight
}

function amountScrolled(){
	var scrollTop = window.pageYOffset
	var pctScrolled = Math.floor(scrollTop/trackLength * 100); // gets percentage scrolled (ie: 80 or NaN if tracklength == 0)
	return pctScrolled;
}

getMeasurements();
