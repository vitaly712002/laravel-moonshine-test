<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;


    public function categories(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class, 'table_article_tag', 'article_id', 'tag_id');
    }

    public function comment() {
        return $this->hasOne(Comment::class);
    }
}
