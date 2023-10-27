<?php


use App\BinanceApi;

require_once 'vendor/autoload.php';

$binanceApi = new BinanceApi();

$pair = readline("Enter the trading pair (e.g., BTCUSDT): ");

$cryptoInfo = $binanceApi->apiData($pair);

if ($cryptoInfo) {
    echo "--------------------------------".PHP_EOL;
    echo "Crypto Information" . PHP_EOL;
    echo "Symbol:               {$cryptoInfo->symbol}" . PHP_EOL;
    echo "Price Change Percent: {$cryptoInfo->priceChangePercent} %" . PHP_EOL;
    echo "High Price:           {$cryptoInfo->highPrice}" . PHP_EOL;
    echo "Low Price:            {$cryptoInfo->lowPrice}" . PHP_EOL;
    echo "Open Time:            {$cryptoInfo->openTime}" . PHP_EOL;
    echo "Close Time:           {$cryptoInfo->closeTime}" . PHP_EOL;
} else {
    echo "Failed to fetch data for $pair" . PHP_EOL;
}

