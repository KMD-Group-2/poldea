<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class Topbar extends Component
{
    public string $username;
    public string $role;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $username, string $role)
    {
        $this->username = $username;
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.topbar');
    }
}
