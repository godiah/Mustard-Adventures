<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_image',
        'name',
        'position',
        'rating',
        'review',
        'adventure_name',
        'review_date'
    ];

    protected $casts = [
        'review_date' => 'date',
        'rating' => 'decimal:1'
    ];

    public function getProfileImageUrlAttribute()
    {
        return $this->profile_image ? asset('storage/' . $this->profile_image) : null;
    }

    public function getFormattedRatingAttribute()
    {
        return number_format($this->rating, 1);
    }
}
