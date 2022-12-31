new WOW().init();

var app = {
    ready(){
        this.methods.testimonials_carousel();
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

        }
    }
}

$(document).ready(function(){
    app.ready();
});