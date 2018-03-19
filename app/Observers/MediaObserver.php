<?php

namespace App\Observers;

use App\Models\Media;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class MediaicObserver
{
    public function saving(Media $media)
    {
        $media->excerpt = make_excerpt($media->body);
    }
    
}