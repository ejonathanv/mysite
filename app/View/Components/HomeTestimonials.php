<?php

namespace App\View\Components;

use App\Models\Testimonial;
use Illuminate\View\Component;

class HomeTestimonials extends Component
{

    public $testimonials;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->getTestimonials();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-testimonials');
    }

    // Necesitamos obtener los ultimos 5 testimonios y pasarlos a la vista
    public function getTestimonials()
    {
        $this->testimonials = Testimonial::orderBy('id', 'desc')->take(5)->get();
    }
}
