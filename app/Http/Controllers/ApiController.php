<?php

namespace App\Http\Controllers;

use App\Http\Integrations\ApiConnector;

class ApiController extends Controller
{
    public function index()
    {
        $apiConnector = new ApiConnector();
        $liturgy = $apiConnector->getTodayLiturgy();
        return view('welcome', ['liturgy' => $liturgy]);
    }
}
