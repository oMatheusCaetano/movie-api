<?php

namespace App\Http\Controllers;

class MovieController extends MediaController
{

    public function __construct()
    {
        $this->mediaType = 'movie';
    }
}
