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

    $( ".owl-prev").html('<i class="bi bi-caret-left"></i>');
    $( ".owl-next").html('<i class="bi bi-caret-right"></i>');
  });