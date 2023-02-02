function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

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

  window.addEventListener('scroll', reveal);

    function reveal(){
      var reveals = document.querySelectorAll('.reveal');

      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
          reveals[i].classList.add('active');
        }
        else{
          reveals[i].classList.remove('active');
        }
      }
    }