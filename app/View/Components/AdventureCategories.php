<?php

namespace App\View\Components;

use App\Models\Adventure;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AdventureCategories extends Component
{
    public $adventures;

    public function __construct()
    {
        // Fetch active adventures, limited to 5 to match the original layout
        $this->adventures = Adventure::active()->get();
    }

    public function render()
    {
        return view('components.adventure-categories');
    }
}
