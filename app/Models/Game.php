<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    protected $fillable = [
        "title",
        "developer",
        "price",
        "release_date",
        "category_id",
        "image",
        "description"
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function average_rating()
    {
        $rating =  $this->reviews()->avg('rating') ?? 0;
        return round($rating);
    }

    public function total_ratings()
    {
        return $this->reviews()->count();
    }
}
