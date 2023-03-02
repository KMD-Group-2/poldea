<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'academic_year_id',
        'category_id',
        'user_id',
        'description',
        'anonymous',
        'posted_at',
    ];

    public function idea_academic_year()
    {
        return $this->belongsTo(IdeaAcademicYear::class,'academic_year_id','id');
    }

    public function idea_category()
    {
        return $this->belongsTo(IdeaCategory::class,'category_id','id');
    }

    public function idea_comments()
    {
        return $this->hasMany(IdeaComments::class);
    }

    public function idea_documents()
    {
        return $this->hasMany(IdeaDocuments::class);
    }

    public function idea_like_unlikes()
    {
        return $this->hasMany(IdeaLikeUnlike::class);
    }

    public function idea_views()
    {
        return $this->hasMany(IdeaView::class);
    }
}
