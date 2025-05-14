<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __invoke()
    {
       return Http::get('https://liturgia.up.railway.app/v2/')->json();
    }
}
