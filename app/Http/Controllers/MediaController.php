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

    public function trending($time_window)
    {
        return Http::withToken($this->apiKey())
            ->get($this->apiUrl("/trending/{$this->mediaType}/{$time_window}"))
            ->json()['results'];
    }
}
