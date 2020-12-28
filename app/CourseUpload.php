<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courseupload extends Model
{
    protected $table = 'courseupoload';
    protected $fillable  = [
        'course_title',
        'course_subtitle',
        'course_description',
        'course_language',
        'course_difficulty',
        'course_category',
        'course_image',
        'course_video'
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'id';

    }
    public function follow(CourseUpload $course)
    {
        return $this->follows()->save($course);
    }

    public function enrolls()
    {
        return $this->belongsToMany(CourseUpload::class, 'follows','course_id','user_id');
    }
    
}
