$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay: false,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-collection').owlCarousel({
		items:2,
		loop:true,
		nav: true,
		autoplay: false,
		margin:10,
		responsive:{
			  0:{
				  items:1
			  },
			  800:{
				  items:2
			  },
			  1000:{
				  items:3
			}
		}
	})

    $( ".owl-prev").html('<div class="cursor-owl"><i class="bi bi-caret-left"></i></div>');
    $( ".owl-next").html('<div class="cursor-owl"><i class="bi bi-caret-right"></i></div>');
  });