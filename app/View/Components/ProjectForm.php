<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectForm extends Component
{

    public $project;
    public $method;
    public $action;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($project, $method)
    {
        $this->project = $project;
        $this->method = $method;
        $this->action = $this->getAction();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-form');
    }

    public function getAction(){
        if($this->method == 'PUT'){
            return route('projects.update', $this->project);
        }else{
            return route('projects.store');
        }
    }
}
