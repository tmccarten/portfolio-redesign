// Check if cookie has been set //
checkCookie();

// ----- Set cookie after 3 seconds ----- //

setTimeout( function() {
  setCookie();
}, 3000);


// ----- Set cookie to prevent animations on homepage each time ----- //

function setCookie() {
  document.cookie = "stopFadeInAbout";
}

// ----- Check if cookie is set ----- //

function checkCookie() {

  if (document.cookie.indexOf("stopFadeInAbout") > -1) {
    var imgAnimation = document.querySelector('.about__img-wrapper');

    imgAnimation.classList.add('no-animation');

  }
}
