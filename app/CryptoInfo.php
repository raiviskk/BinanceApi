<?php

namespace App;

use Carbon\Carbon;

class CryptoInfo
{
    public string $symbol;
    public float $priceChangePercent;
    public float $highPrice;
    public float $lowPrice;
    public Carbon $openTime;
    public Carbon $closeTime;

    public function __construct(
        string $symbol,
        float  $priceChangePercent,
        float  $highPrice,
        float  $lowPrice,
        Carbon $openTime,
        Carbon $closeTime
    )
    {

        $this->symbol = $symbol;
        $this->priceChangePercent = $priceChangePercent;
        $this->highPrice = $highPrice;
        $this->lowPrice = $lowPrice;
        $this->openTime = Carbon::parse($openTime);
        $this->closeTime = Carbon::parse($closeTime);
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getPriceChangePercent(): float
    {
        return $this->priceChangePercent;
    }

    public function getHighPrice(): float
    {
        return $this->highPrice;
    }


    public function getLowPrice(): float
    {
        return $this->lowPrice;
    }


    public function getOpenTime(): Carbon
    {
        return $this->openTime;
    }

    public function getCloseTime(): Carbon
    {
        return $this->closeTime;
    }
}
