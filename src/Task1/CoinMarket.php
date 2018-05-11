<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

use Cryptocurrency\Task1\Bitcoin;
use Cryptocurrency\Task1\Ethereum;
use Cryptocurrency\Task1\Dogecoin;

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

    public function fillMarket() : void
    {
        $this->addCurrency(new Bitcoin(rand(5, 15)));
        $this->addCurrency(new Ethereum(rand(5, 15)));
        $this->addCurrency(new Dogecoin(rand(5, 15)));
    }
}