<?php

namespace App\View\Components;

use App\Models\Review;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ReviewsTestimonials extends Component
{
    public $reviews;
    public $overallRating;
    public $reviewCount;

    public function __construct()
    {
        // Fetch up to 5 reviews to match the original layout
        $this->reviews = Review::take(5)->get();

        // Calculate overall rating and review count
        $this->reviewCount = Review::count();
        $this->overallRating = Review::avg('rating') ? number_format(Review::avg('rating'), 1) : '0.0';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reviews-testimonials');
    }
}
