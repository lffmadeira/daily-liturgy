<?php

namespace  App\Http\Integrations;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class ApiConnector
{
    protected $baseUrl = ('https://liturgia.up.railway.app/v2/');

    public function getTodayLiturgy()
    {

        $response = Http::get($this->baseUrl, [
            // 'day' => $day,
            // 'month' => $month,
            // 'year' => $year,
        ]);

    if ($response->successful()) {
            return $response->json();
        } else {
            return null;
        }
    }
}
