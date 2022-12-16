<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'specialty_id',
        'blog_contribution_id'
    ];

    protected $appends = ['reading_time'];

    /**
     * Get the blog's file.
     */
    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    /**
     * Get the blog's category.
     */
    public function category()
    {
        return $this->belongsTo(Specialty::class, 'specialty_id');
    }

    /**
     * set average reading time for blog 
     */
    protected function getReadingTimeAttribute() 
    {
        $wpm = 200;
        $wordCount = str_word_count(strip_tags($this->body));
        $minutes = (int) floor($wordCount / $wpm);
        $seconds = (int) floor($wordCount % $wpm / ($wpm / 60));
        
        if ($minutes === 0) 
        {
            return $seconds." min(s)";
        } 
        else 
        {
            return $minutes." sec(s)";
        }
    }

    /**
     * get author of the blog
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ratings()
    {
        return $this->hasMany(Ratings::class);
    }

    public function getRating()
    {
        if ($this->ratings->count()) {
            $rate = $this->ratings->sum('rate') / $this->ratings->count();
            return round($rate, 2);
        }
        return 0.00;
    }
}

