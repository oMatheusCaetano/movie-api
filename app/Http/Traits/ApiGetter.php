<?php

namespace App\Http\Traits;

trait ApiGetter
{

  public function apiUrl(string $url)
  {
    return env('TMDB_API_BASE_URL') . $url;
  }

  public function apiKey()
  {
    return env('TMDB_API_KEY');
  }
}
