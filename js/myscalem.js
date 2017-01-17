jQuery(document).ready(function( $ ) {
  if($(window).width() > 768) {
    // Scale heading using default options
    $('.playfairSC').scalem({
      ratio: 0.75,
      reference: 'div.title'
    });
  } 
  
} )