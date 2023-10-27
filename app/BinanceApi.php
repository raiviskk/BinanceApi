<?php

namespace App;

use GuzzleHttp\Client;
use Carbon\Carbon;

class BinanceApi
{
    private string $apiUrl;

    public function __construct()
    {
        $this->apiUrl = "https://api4.binance.com/api/v3/ticker/24hr";
    }

    public function apiData(string $pair): CryptoInfo
    {
        $url = "{$this->apiUrl}?symbol={$pair}";
        $client = new Client();

        $response = $client->get($url);
        $responseBody = $response->getBody()->getContents();
        $data = json_decode($responseBody, false);


        $openTimeInSeconds = $data->openTime / 1000;
        $closeTimeInSeconds = $data->closeTime / 1000;


        return new CryptoInfo(
            $data->symbol,
            $data->priceChangePercent,
            $data->highPrice,
            $data->lowPrice,
            Carbon::createFromTimestamp($openTimeInSeconds),
            Carbon::createFromTimestamp($closeTimeInSeconds)
        );

    }
}
