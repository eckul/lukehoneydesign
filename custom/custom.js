 
 var jQuery = jQuery.noConflict();

	//setTimeout(function () {
	
	jQuery(document).ready(function(){
		
		
	
  jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() > 100){
            jQuery('#goTop').stop().animate({
                bottom: '10px'    
                }, 500);
				
				
				
				if (jQuery(window).width() > 992){
				
				 jQuery('.contact-dets .text').css('display','none');
				 jQuery('.contact-dets li').css('display','inline-block');
				 jQuery('i.fa').css('padding','5px');
				 jQuery('.custom-logo img ').css('max-width','300px');
			
					}
		
        }
        else{
            jQuery('#goTop').stop().animate({
               bottom: '-100px'    
            }, 500);
			
			
			if (jQuery(window).width() > 992){
			
				 jQuery('.contact-dets .text').css('display','inline');
				 jQuery('.contact-dets li').css('display','block');
				 jQuery('i.fa').css('padding','0px');
				 jQuery('.custom-logo img ').css('max-width','450px');
			}
			
        }
    });
	
	
    jQuery('#goTop').click(function() {
        jQuery('html, body').stop().animate({
           scrollTop: 0
        }, 500, function() {
           jQuery('#goTop').stop().animate({
               bottom: '-100px'    
           }, 500);
        });
    });
	
	
	jQuery('.bg-parallax').attr('data-bg-size-adjust','scale');
	
	
			
var postbg = jQuery ('.post-thumbnail img').attr('src');	


jQuery ('.blurred-bg').css('background-image','url('+postbg+')');

//jQuery ('.custom-header-wrap').css('background-image','url('+postbg+')');

  if (jQuery('input#pw').length !== 0) {
   
   /*vars*/
   //var pass = 'snell';
  //var pass = 'snell' || 'feet';
 
 
//if (!(i == 'InvKey' || i == 'PostDate')) {
   
   window.setInterval(function () {
	   
	   if(jQuery('input#pw').val() == 'snell' 
	   || jQuery('input#pw').val() == 'feet'
	   || jQuery('input#pw').val() == 'hat'
	   
	   
	   
	   )
	   
	   
	   {

     //if (jQuery('input#pw').val() == pass) {

//jQuery ( "#content" ).show()
jQuery ('.cover').slideUp(500);


var d = new Date();
//d.setTime(d.getTime() + 1*60*1000); // in milliseconds
//d.setTime(d.getTime() + 7*1*60*1000); // in milliseconds
//d.setTime(d.getTime()+(days*7*60*60*1000));

d.setDate(d.getDate()+7)

document.cookie = 'auth=yes;path=/;expires='+d.toGMTString()+';';



        
      } else {





  
      }
      ;

    }, 1000);
  }



function repeatcover() {
  jQuery ( "#content" ).css('display','none')
 
}






  jQuery('#register-modal').attr('class', 'none');
  
  
  

if ( jQuery.cookie('auth')) {
     jQuery ('.cover').hide();
	  // jQuery ( "#content" ).show()
	 clearInterval(timer);
} else {
	
	jQuery ('.cover').slideDown(500);
	
	//var timer =  window.setInterval(function () {
	
	//repeatcover()
	
	 //}, 1000);
	
};




		});<!--end doc ready-->
		
		