<?php

namespace App\View\Components;

use App\Models\Testimonial;
use Illuminate\View\Component;

class TestimonialsTable extends Component
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
        return view('components.testimonials-table');
    }

    public function getTestimonials()
    {
        $this->testimonials = Testimonial::orderBy('id', 'desc')->get();
    }
}
