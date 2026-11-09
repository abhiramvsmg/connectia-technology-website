jQuery(document).ready(function() {
  
  if(localStorage.getItem('eucookie') != '123'){
    jQuery("#privacy-pop-up").delay(1).fadeIn(1000);
    localStorage.setItem('eucookie','123');
  } 
  
  jQuery('#exit-popup').click(function(e) { 
    jQuery('#privacy-pop-up').fadeOut(1000);
  });
  
});