new WOW().init({
    mobile: false
});

var app = {
    ready(){
        this.methods.testimonials_carousel();
        this.methods.toggle_menu();
    },
    methods: {
        // Aqui activamos el carousel de los testimonios con OWL Carousel
        testimonials_carousel(){
            var owl = $('.owl-carousel');

            owl.owlCarousel({
                margin:0,
                loop:false,
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
                },
            });

            // Necesitamos avanzar al siguiente testimonio al hacer click en el botón de siguiente
            $('.customNextBtn').click(function(e) {
                e.preventDefault();
                owl.trigger('next.owl.carousel');
            });

            // Necesitamos retroceder al testimonio anterior al hacer click en el botón de anterior
            $('.customPrevBtn').click(function(e) {
                e.preventDefault();
                owl.trigger('prev.owl.carousel', [300]);
            });

        },
        // Toggle para el menu de navegacion en moviles
        toggle_menu(){
            $('.mobile__nav__icon').click(function(){
                $('.mobile__nav__menu').toggleClass('show');
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                $('body').toggleClass('overflow-hidden');
            });

            $('.mobile__nav__menu__close').click(function(){
                $('.mobile__nav__menu').toggleClass('show');
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                $('body').toggleClass('overflow-hidden');
            });
        }
    }
}

$(document).ready(function(){
    app.ready();
});