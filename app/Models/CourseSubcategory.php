<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubcategory extends Model
{
    use HasFactory;

      public function coursecategory()
    {
      return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }
}
