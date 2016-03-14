(function($) {

$('.gallery-item').magnificPopup({
  delegate: 'a',
    type: 'image',
    gallery: {
      enabled: true
      }
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