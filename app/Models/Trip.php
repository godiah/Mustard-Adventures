<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'date',
        'days',
        'spots_left',
        'rating',
        'price',
        'difficulty_level',
        'tags',
        'is_active'
    ];

    protected $casts = [
        'date' => 'date',
        'tags' => 'array',
        'rating' => 'decimal:2',
        'price' => 'decimal:2',
        'is_active' => 'boolean'
    ];

    /**
     * Get the difficulty level options
     */
    public static function getDifficultyLevels(): array
    {
        return [
            'all_levels' => 'All Levels',
            'beginner' => 'Beginner',
            'family friendly' => 'Family Friendly',
            'moderate' => 'Moderate',
            'expert' => 'Expert',
            'premium experience' => 'Premium Experience'
        ];
    }

    // Accessor for formatted date
    protected function formattedDate(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->date->format('j F Y')
        );
    }

    // Accessor for availability status
    protected function availabilityStatus(): Attribute
    {
        return Attribute::make(
            get: function () {
                if ($this->spots_left <= 0) {
                    return 'Fully Booked';
                } elseif ($this->spots_left <= 3) {
                    return 'Almost Full';
                } elseif ($this->spots_left <= 5) {
                    return 'Filling Fast';
                } else {
                    return 'Available';
                }
            }
        );
    }

    // Scope for active trips
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for upcoming trips
    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', now());
    }

    // Check if trip has specific tag
    public function hasTag($tag)
    {
        return in_array($tag, $this->tags ?? []);
    }

    // Get difficulty level badge class
    public function getDifficultyBadgeClass()
    {
        return match ($this->difficulty_level) {
            'expert' => 'bg-red-100 text-red-800',
            'moderate' => 'bg-yellow-100 text-yellow-800',
            'family friendly' => 'bg-green-100 text-green-800',
            'premium experience' => 'bg-purple-100 text-purple-800',
            default => 'bg-gray-100 text-gray-800'
        };
    }
}
