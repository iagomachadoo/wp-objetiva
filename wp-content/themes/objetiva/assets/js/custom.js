(function($) {

	'use strict';
	// Mean Menu
	$('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});

    //AOS animation
    AOS.init({
        once: true,
        disable: function() {
        var maxWidth = 900;
        return window.innerWidth < maxWidth;
        }
    });

	// Others Option For Responsive JS 
	$(".others-option-for-responsive .dot-menu").on("click", function(){
		$(".others-option-for-responsive .container .container").toggleClass("active");
	});

    //Trailer Slider
    $('.trailer-slider').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        center:true,
        autoplay:true,
        smartSpeed: 800,
        autoplayHoverPause:true,
        navText: [
            '<i class="fa-solid fa-angle-left"></i>', 
            '<i class="fa-solid fa-angle-right"></i>',  
        ],
        responsive:{
            0:{
                items:1, 
            },
            576:{
                items:1, 
            },
            768:{
                items:2,
                center:false,
            },
            992:{
                items:3,
            },
            1200:{
                items:4,
            },
                
        }
    });

	//* magnific popup
	$(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 100,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });

    $('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] 
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});

	// Go to Top
    $(window).on('scroll', function(){
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
        });
    // Click Event
    $('.go-top').on('click', function() {
    $("html, body").animate({ scrollTop: "0" },  500);
    });

    // Aplica a mascara aos campos de telefone e whatsapp
    var behaviorTelefone = function (val) {
            return val.replace(/\D/g, "").length === 11
                ? "(00) 00000-0000"
                : "(00) 0000-00009";
        },
        optionsTelefone = {
            onKeyPress: function (val, e, field, optionsTelefone) {
                field.mask(
                    behaviorTelefone.apply({}, arguments),
                    optionsTelefone
                );
            },
        };

    if (document.querySelector("#telefone")) {
        $("#telefone").mask(behaviorTelefone, optionsTelefone);
    }

    if (document.querySelector("#whatsapp")) {
        $("#whatsapp").mask(behaviorTelefone, optionsTelefone);
    }

})(jQuery);

let itensARedimensionar = [
    ".single-features-card",
    ".single-blog-card",
];

function resize() {
    let itensARedimensionar = [...arguments];
    itensARedimensionar.forEach(element => {
      window.addEventListener("load", (event) => {
          window.addEventListener("resize", () => {
              const itemRedimensionado = document.querySelectorAll(element);
              itemRedimensionado.forEach((desc) => {
                  desc.style.height = "auto";
              });
              let maior = 0;
              itemRedimensionado.forEach((desc) => {
                  if (desc.clientHeight > maior) {
                      maior = desc.clientHeight;
                  }
              });
              itemRedimensionado.forEach((desc) => {
                  desc.style.height = maior + "px";
              });
          });
          window.dispatchEvent(new Event("resize"));
      });
    });
};

resize(...itensARedimensionar);