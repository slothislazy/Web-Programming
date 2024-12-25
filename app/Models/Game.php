<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    protected $fillable = [
        "title",
        "developer",
        "price",
        "release-date",
        "category_id",
        "image",
        "description"
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
