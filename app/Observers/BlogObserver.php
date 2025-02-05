<?php

namespace App\Observers;

use App\Models\Blog;
use Illuminate\Support\Str;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Blog $blog): void
    {
        //
    }

    public function saving(Blog $blog)
    {

        $blog->slug_az = $this->generateSlug($blog->head_az);
        $blog->slug_en = $this->generateSlug($blog->head_en);
    }

    private function generateSlug($head)
    {
        // Replace 'ə' with 'e' and 'Ə' with 'E', then generate a slug
        $head = str_replace(['ə', 'Ə'], ['e', 'E'], $head);
        return Str::slug($head);
    }
}
