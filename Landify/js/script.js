
jQuery(document).ready(function($) {

  // Toggle Menu
  $(document).ready(function(){
  	$('.navbar-toggler').click(function(){
  		$('#nav-icon').toggleClass('open');
  	});
  });


// Nav Bar Scroll Animation
  var position = $(window).scrollTop();
  let navbar = $('.navbar');

// On scroll down, hide navbar
$(window).scroll(function() {
  if($(window).scrollTop() >= 120 && !navbar.hasClass('scroll-active')){
       navbar.toggleClass('scroll-active');
     }
     else if ( $(window).scrollTop() < 120 && navbar.hasClass('scroll-active')){
       navbar.toggleClass('scroll-active');
    }
  });

// Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('.navbar').outerHeight();

  $(window).scroll(function(event){
      didScroll = true;
  });

  setInterval(function() {
      if (didScroll) {
          hasScrolled();
          didScroll = false;
      }
  }, 250);

  function hasScrolled() {
      var st = $(this).scrollTop();

      if(Math.abs(lastScrollTop - st) <= delta)
          return;

      if (st > lastScrollTop && st > navbarHeight){
          // Scroll Down
          $('.navbar').removeClass('nav-down').addClass('nav-up');
          $('.dropdown-menu').removeClass('show')
      } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
              $('.navbar').removeClass('nav-up').addClass('nav-down');
          }
      }
    lastScrollTop = st;
  }


// Changes the 'featured image' img src to the src defined in data attribute.
let panel = $(".section_2 a");
panel.hover( function() {
  let value = $(this).attr('data-src');
  $(".featured_image").attr("src", value);
  panel.removeClass('panel-active');
  $(this).addClass('panel-active');
  });

});
// End jQuery


// A wonderful little js library that allows for nice element fade ins on scrolling
// Could have been acheived using JS, but the UX feels waaaay smoother with this
AOS.init({
   once: true
})
