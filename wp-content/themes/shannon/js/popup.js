(function($) {

$('.gallery-item').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image'
  // other options
});

//

$( "#mapToggle" ).click(function() {
  $( ".map" ).toggleClass( "highlight" );
});

$(window).load(function() {
  // When the page has loaded
  $(".hero").fadeIn(2000);
});


})(jQuery);