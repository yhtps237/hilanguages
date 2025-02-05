<?php

namespace App\Observers;

use App\Models\OurTeam;
use Illuminate\Support\Str;


class OurTeamObserver
{
    /**
     * Handle the OurTeam "created" event.
     */
    public function created(OurTeam $ourTeam): void
    {
        //
    }

    /**
     * Handle the OurTeam "updated" event.
     */
    public function updated(OurTeam $ourTeam): void
    {
        //
    }

    /**
     * Handle the OurTeam "deleted" event.
     */
    public function deleted(OurTeam $ourTeam): void
    {
        //
    }

    /**
     * Handle the OurTeam "restored" event.
     */
    public function restored(OurTeam $ourTeam): void
    {
        //
    }

    /**
     * Handle the OurTeam "force deleted" event.
     */
    public function forceDeleted(OurTeam $ourTeam): void
    {
        //
    }

    public function saving(OurTeam $ourTeam)
    {

        $ourTeam->slug_az = $this->generateSlug($ourTeam->name_az);
        $ourTeam->slug_en = $this->generateSlug($ourTeam->name_en);
    }

    private function generateSlug($head)
    {
        // Replace 'ə' with 'e' and 'Ə' with 'E', then generate a slug
        $head = str_replace(['ə', 'Ə'], ['e', 'E'], $head);
        return Str::slug($head);
    }
}
