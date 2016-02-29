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


$("a").on("click", function() {
  prevent.Default();
});

})(jQuery);