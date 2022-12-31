<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class AdminRecentProject extends Component
{

    public $project;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->getRecentProject();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-recent-project');
    }

    public function getRecentProject(){
        $this->project = Project::latest()->first();
    }
}
