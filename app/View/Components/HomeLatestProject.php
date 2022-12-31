<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class HomeLatestProject extends Component
{

    public $project;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->getLatestProject();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-latest-project');
    }

    public function getLatestProject(){
        $this->project = Project::latest()->first();
    }
}
