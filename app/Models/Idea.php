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
        'title',
        'description',
        'anonymous',
        'posted_at',
        'qa_c_read',
    ];

    public function academic_year()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(IdeaComments::class);
    }

    public function documents()
    {
        return $this->hasMany(IdeaDocuments::class);
    }

    public function like_unlikes()
    {
        return $this->hasMany(IdeaLikeUnlike::class);
    }

    public function views()
    {
        return $this->hasMany(IdeaView::class);
    }
}
