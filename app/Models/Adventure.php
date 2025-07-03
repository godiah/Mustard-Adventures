<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'days',
        'people',
        'difficulty_level',
        'image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get the difficulty level options
     */
    public static function getDifficultyLevels(): array
    {
        return [
            'all_levels' => 'All Levels',
            'beginner' => 'Beginner',
            'family_friendly' => 'Family Friendly',
            'moderate' => 'Moderate',
            'expert' => 'Expert',
            'premium_experience' => 'Premium Experience'
        ];
    }

    /**
     * Get the days options
     */
    public static function getDaysOptions(): array
    {
        return [
            'half_day' => 'Half Day',
            '1_day' => '1 Day',
            '2_days' => '2 Days',
            '3_days' => '3 Days',
            '3-7_days' => '3-7 Days',
            '1_week' => '1 Week',
            '2_weeks' => '2 Weeks',
            'custom' => 'Custom Duration'
        ];
    }

    /**
     * Get the people options
     */
    public static function getPeopleOptions(): array
    {
        return [
            '1-2' => '1-2 People',
            '2-4' => '2-4 People',
            '2-6' => '2-6 People',
            '2-8' => '2-8 People',
            '2-12' => '2-12 People',
            '6-15' => '6-15 People',
            '10+' => '10+ People'
        ];
    }

    /**
     * Scope for active adventures
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
