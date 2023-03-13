<?php

namespace App\View\Components\Staff;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Table extends Component
{
    public LengthAwarePaginator $staff;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(LengthAwarePaginator $staff)
    {
        $this->staff = $staff;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.staff.table');
    }
}
