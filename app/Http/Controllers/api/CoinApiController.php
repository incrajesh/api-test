<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Services\CoinService;

class CoinApiController extends Controller
{
    public function getAssets()
    {
        try {
            $coinService = new CoinService();
            $assetResponse = $coinService->getAssets();
            return response()->json($assetResponse);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }
}
