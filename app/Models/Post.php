<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Attributes\Scope;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ['author', 'category'];

    #[Scope]
    protected function filter(Builder $query, array $filters): void
    {
        $query->when($filters['keyword'] ?? false, function ($query, $keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', fn (Builder $query) =>
                $query->where('slug', $category)
            );
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', fn (Builder $query) =>
                $query->where('username', $author)
            );
        });
        
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}