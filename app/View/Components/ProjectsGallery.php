<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class ProjectsGallery extends Component
{

    public $recent;
    public $projects;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->getRecent();
        $this->getAllProjectsExceptRecent();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projects-gallery');
    }

    public function getRecent(){
        $this->recent = Project::latest()->first();
    }

    public function getAllProjectsExceptRecent(){
        if($this->recent){
            $this->projects = Project::where('id', '!=', $this->recent->id)->get();
        }else{
            $this->projects = Project::all();
        }
    }
}
