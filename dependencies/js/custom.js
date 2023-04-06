
/*$(function() {
    $('#carouselFade,#carouselFade .carousel-inner,#carouselFade .carousel-inner .carousel-item').css({
        'height': (($(window).height()) - 0) + 'px'
    });

    $(window).resize(function() {
        $('#carouselFade,#carouselFade .carousel-inner,#carouselFade .carousel-inner .carousel-item').css({
            'height': (($(window).height()) - 0) + 'px'
        });
        
    });
});
*/
wow = new WOW({
    animateClass: 'animated',
    offset: 100,
	mobile:false,
    callback: function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
});
wow.init();
 $(".comapare-box .close").click(function(e) {
  $(".compareBoxWrapper").hide();  
  });
	
	
	$('#bottom').on( 'click', function() {
     $('body,html').animate({scrollTop:0},500);
  });
(function($) { "use strict";

	 /*-- Menu Sticky--*/
  var windows = $(window);
  var sticky = $('.motorHeader');
	var t = $(".motorHeader").height();
    windows.on('scroll', function() {
        var scroll = windows.scrollTop();
        if (scroll < 50) {
            sticky.removeClass('scroll-on');
			$("body").css({"padding-top":0+"px"});
			
        }else{
            sticky.addClass('scroll-on');
			$("body").css({"padding-top":t+"px"});
        }
    });
		
	

	
  })(jQuery);


	$(".navbar-toggler").click(function(e) {
    e.preventDefault();
   // $(".navbar-inverse").toggleClass("open");
	$(".menuoverlay").toggleClass('open');
	$(this).toggleClass('closed');
  });
  $(".menuoverlay").click(function(e) {
    e.preventDefault();   
	$(".navbar-collapse").toggleClass("show");
	$(".menuoverlay").toggleClass('open');
	$(".navbar-toggler").removeClass('closed');
  });
/*End Here*/

if (jQuery(window).width() < 768) {
	jQuery(document).ready(function (b) {
		function a(c) {
			b(c).bind("click", function (d) {
				d.preventDefault();
				b(this).parent().fadeOut()
			})
		}
		b(".dropdown .carret").click(function () {
			var c = b(this).parents(".dropdown").children(".dropdown-menu").is(":hidden");
			b(".dropdown .dropdown-menu").hide();
			b(".dropdown").removeClass("active");
			if (c) {
				b(this).parents(".dropdown").children(".dropdown-menu").toggle().parents(".dropdown").children(".dropdown").addClass("active")
			}
		});
		b(document).bind("click", function (c) {
			var d = b(c.target);
			if (!d.parents().hasClass("dropdown")) {
				b(".dropdown  .dropdown-menu").hide()
			}
		});
		b(document).bind("click", function (c) {
			var d = b(c.target);
			if (!d.parents().hasClass("dropdown")) {
				b(".dropdown").removeClass("active")
			}
		})
	});
}
$('#theModal').on('show.bs.modal', function (e) {

    var button = $(e.relatedTarget);
    var modal = $(this);
    modal.find('.modal-body1').load(button.data("remote"));

});
$('#theModal2').on('show.bs.modal', function (e) {

    var button = $(e.relatedTarget);
    var modal = $(this);
    modal.find('.modal-body3').load(button.data("remote"));

});
$('#theModal3').on('show.bs.modal', function (e) {

    var button = $(e.relatedTarget);
    var modal = $(this);
    modal.find('.modal-body4').load(button.data("remote"));

});








$(document).ready(function() {

   $('.table-responsive-stack').find("th").each(function (i) {
      
      $('.table-responsive-stack td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+ $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();
   });
   
$( '.table-responsive-stack' ).each(function() {
  var thCount = $(this).find("th").length; 
   var rowGrow = 100 / thCount + '%';
   //console.log(rowGrow);
   $(this).find("th, td").css('flex-basis', rowGrow);   
});
   
function flexTable(){
   if ($(window).width() < 768) {
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").show();
      $(this).find('thead').hide();
   });
 
   } else {
      
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").hide();
      $(this).find('thead').show();
   });
      
      

   }

}      
 
flexTable();
   
window.onresize = function(event) {
    flexTable();
};
   
});


  

