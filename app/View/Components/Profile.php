<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Profile extends Component
{
    /**
     * url
     *
     * @var string
     */
    public $url;

    /**
    * @var string
    */
    public $fullname;

    /**
     * Create a new component instance.
     *
     * @param  mixed $url
     * @param  mixed $fullname
     * @return void
     */
    public function __construct($url, $fullname)
    {
        $this->url = $url;
        $this->fullname = $fullname;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile');
    }
}
