var mq = window.matchMedia( "(min-width: 52em)" );

window.addEventListener("resize", function(){
	getMeasurements()
}, false);

window.addEventListener("scroll", function(){
	clearTimeout(throttleScroll)
		throttleScroll = setTimeout(function(){ // throttle code inside scroll to once every 50 milliseconds
		amountScrolled()
	}, 500)

  var share = document.getElementsByClassName('blogpost__share')[0];

  if (mq.matches === false) {
    share.style.justifyContent = "space-around";
  } else if (mq.matches && amountScrolled() > 50) {
      share.style.justifyContent = "flex-end";
    } else {
      share.style.justifyContent = "flex-start";
    }
}, false);
