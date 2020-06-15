<?php

namespace App\Http\Controllers;

use App\Http\Traits\ApiGetter;
use Illuminate\Support\Facades\Http;

class MediaController extends Controller
{
    use ApiGetter;

    protected $mediaType;

    public function popular()
    {
        return Http::withToken($this->apiKey())
            ->get($this->apiUrl("{$this->mediaType}/popular"))
            ->json()['results'];
    }

    public function upcoming()
    {
        return Http::withToken($this->apiKey())
            ->get($this->apiUrl("{$this->mediaType}/upcoming"))
            ->json()['results'];
    }

    public function videos($movie_id)
    {
        return Http::withToken($this->apiKey())
            ->get($this->apiUrl("/movie/${movie_id}/videos"))
            ->json()['results'];
    }

    public function trending($time_window)
    {
        return Http::withToken($this->apiKey())
            ->get($this->apiUrl("/trending/{$this->mediaType}/{$time_window}"))
            ->json()['results'];
    }
}
