<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    protected $currencies = [];

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {
        return max( array_map(function(Currency $coin){
            return $coin->getDailyPrice();
        }, $this->currencies) );
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}