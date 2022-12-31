<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestimonialForm extends Component
{

    public $testimonial;
    public $action;
    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($testimonial, $method)
    {
        $this->testimonial = $testimonial;
        $this->method = $method;
        $this->define_action();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial-form');
    }

    public function define_action(){
        if($this->method == 'POST'){
            $this->action = route('testimonials.store');
        }else{
            $this->action = route('testimonials.update', $this->testimonial->id);
        }
    }
}
