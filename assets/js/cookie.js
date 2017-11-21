// Check if cookie has been set //
checkCookie();

// ----- Set cookie after 3 seconds ----- //

setTimeout( function() {
  setCookie();
}, 3000);


// ----- Set cookie to prevent animations on homepage each time ----- //

function setCookie() {
  document.cookie = "stopFadeIn";
}

// ----- Check if cookie is set ----- //

function checkCookie() {

  if (document.cookie === "stopFadeIn") {
    var tileAnimation = document.querySelectorAll('.tile-inner')

    for (i = 0; i < tileAnimation.length; i++) {
      tileAnimation[i].classList.add('no-animation');
    }

  }
}
