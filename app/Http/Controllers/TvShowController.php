<?php

namespace App\Http\Controllers;

class TvShowController extends MediaController
{

    public function __construct()
    {
        $this->mediaType = 'tv';
    }
}
