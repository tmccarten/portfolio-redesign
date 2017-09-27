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
