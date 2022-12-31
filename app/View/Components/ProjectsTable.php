<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class ProjectsTable extends Component
{

    public $projects;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->getProjects();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projects-table');
    }

    public function getProjects(){
        $this->projects = Project::orderBy('created_at', 'desc')->get();
    }
}
