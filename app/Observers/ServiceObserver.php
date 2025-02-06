<?php

namespace App\Observers;

use App\Models\Service;
use Illuminate\Support\Str;

class ServiceObserver
{
    /**
     * Handle the Service "created" event.
     */
    public function created(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "updated" event.
     */
    public function updated(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "deleted" event.
     */
    public function deleted(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "restored" event.
     */
    public function restored(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "force deleted" event.
     */
    public function forceDeleted(Service $service): void
    {
        //
    }

    public function saving(Service $service)
    {

        $service->slug_az = $this->generateSlug($service->head_az);
        $service->slug_en = $this->generateSlug($service->head_en);
        $service->slug_ru = $this->generateSlug($service->head_ru);
    }

    private function generateSlug($head)
    {
        // Replace 'ə' with 'e' and 'Ə' with 'E', then generate a slug
        $head = str_replace(['ə', 'Ə'], ['e', 'E'], $head);
        return Str::slug($head);
    }
}
