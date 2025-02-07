<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Str;

class CourseObserver
{
    /**
     * Handle the Course "created" event.
     */
    public function created(Course $course): void
    {
        //
    }

    /**
     * Handle the Course "updated" event.
     */
    public function updated(Course $course): void
    {
        //
    }

    /**
     * Handle the Course "deleted" event.
     */
    public function deleted(Course $course): void
    {
        //
    }

    /**
     * Handle the Course "restored" event.
     */
    public function restored(Course $course): void
    {
        //
    }

    /**
     * Handle the Course "force deleted" event.
     */
    public function forceDeleted(Course $course): void
    {
        //
    }

    public function saving(Course $course)
    {

        $course->slug_az = $this->generateSlug($course->head_az);
        $course->slug_en = $this->generateSlug($course->head_en);
        $course->slug_ru = $this->generateSlug($course->head_ru);
    }

    private function generateSlug($head)
    {
        // Replace 'ə' with 'e' and 'Ə' with 'E', then generate a slug
        $head = str_replace(['ə', 'Ə'], ['e', 'E'], $head);
        return Str::slug($head);
    }
}
