<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Config;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CoinService
{

    private $baseUrl;
    private $version;
    private $apiKey;
    private $client;

    public function __construct()
    {
        $this->baseUrl = Config::get('coinapi.base_url');
        $this->version = Config::get('coinapi.version');
        $this->apiKey = Config::get('coinapi.key');
        $this->client = new Client([
            'base_uri' => $this->baseUrl, 'headers' => ['X-CoinAPI-Key' => $this->apiKey,]
        ]);
    }

    /**
     * Get Coin assets from coin api
     * API Documentation url: https://docs.coinapi.io/?php#list-all-assets-get
     */
    public function getAssets()
    {
        try {
            $response = $this->client->request('GET', $this->version . '/assets');
            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);
                return ['success' => true, 'data' => $data];
            }
            return ['success' => false, 'message' => 'Something went wrong!'];
        } catch (GuzzleException $ex) {
            return ['success' => false, 'message' => $ex->getMessage()];
        }
    }
}
