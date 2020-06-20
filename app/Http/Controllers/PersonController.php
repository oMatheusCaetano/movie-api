<?php

namespace App\Http\Controllers;

use App\Http\Traits\ApiGetter;
use Illuminate\Support\Facades\Http;

class PersonController extends Controller
{
    use ApiGetter;

    public function show($person_id)
    {
        return Http::withToken($this->apiKey())
            ->get($this->apiUrl("person/${person_id}"))
            ->json();
    }

    public function popular()
    {
        $page = empty($_GET['page']) ? 1 : $_GET['page'];
        return Http::withToken($this->apiKey())
            ->get($this->apiUrl("person/popular?page=${page}"))
            ->json();
    }
}
