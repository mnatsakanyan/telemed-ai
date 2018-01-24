var j = jQuery.noConflict();
jQuery(document).ready(function () {

//	jQuery('[id="#fm_posts"]').attr('data-q_id','#fm_posts');

  
    if(jQuery('html').attr('lang')=="ru-RU"){
        jQuery('#cookie-notice').hide();
    }

    jQuery('#menu-main-menu li a, #menu-main-menu-1 li a').each(function(){

        var href = jQuery(this).attr('href');

        jQuery('[id="'+ href +'"]').attr('data-q_id',href)
    })


    jQuery('#menu-main-menu-1 li a').click(function(){
        jQuery('.fmm_container').removeClass('fm_open');

       /*remove opened mobile menu icon*/
        jQuery('#nav-icon1').removeClass( 'open');


        jQuery('html, body').removeClass( 'fm_scroll');
        _href =  jQuery(this).attr('href');



        jQuery('html, body').animate({
            scrollTop: jQuery('[id="'+_href+'"]').offset().top
        }, 800);


    })






    var fm_height = window.innerHeight
    //console.log(fm_height);
    jQuery('.fmm_container').css('height',fm_height -75);
    jQuery('.fm_popup_container_inner').css('height',fm_height);



    jQuery('.fm_custom_header .qtranxs_widget .active ').click(function(event){
        event.preventDefault();
        jQuery('.fm_custom_header .qtranxs_widget' ).toggleClass('fm_active');

    });

    jQuery('#nav-icon1').click(function(){
        jQuery(this).toggleClass('open');
        jQuery('.fmm_container').toggleClass('fm_open');
        jQuery('html, body').toggleClass( 'fm_scroll');
    });
    jQuery('#submit_application, .fm_mail_popup').click(function(event){
        event.preventDefault();
        jQuery('.fm_popup_container').toggleClass('fm_open_popup');
        jQuery('html, body').toggleClass( 'fm_scroll');
    });
    jQuery('.fm_class, .fm_popup_container_inner').click(function(){

        jQuery('.fm_popup_container').removeClass('fm_open_popup');
        jQuery('html, body').removeClass( 'fm_scroll');
    });


});

/*
jQuery(document).on('click','.fm_mobile_menu_button span',function(){
	console.log('click');
	jQuery('.fmm_container').css('display','block');
    });

	  jQuery('html, body').animate({
            scrollTop: jQuery('[id="#fm_posts"]').offset().top
        }, 500);
	*/

