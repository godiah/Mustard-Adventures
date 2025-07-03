<?php

namespace App\View\Components;

use App\Models\Trip;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class UpcomingAdventures extends Component
{
    public $trips;

    public function __construct()
    {
        $this->trips = Trip::active()->upcoming()->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.upcoming-adventures');
    }
}
