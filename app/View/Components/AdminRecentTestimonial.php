<?php

namespace App\View\Components;

use App\Models\Testimonial;
use Illuminate\View\Component;

class AdminRecentTestimonial extends Component
{

    public $testimonial;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->getTestimonial();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-recent-testimonial');
    }

    public function getTestimonial()
    {
        $this->testimonial = Testimonial::orderBy('id', 'desc')->first();
    }
}
