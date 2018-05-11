<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    private $response;

    public function present(CoinMarket $market): string
    {
        $this->response = "<table>";

        foreach ($market->getCurrencies() as $currency) {

            $this->response .= "<tr>{$this->printImage($currency->getLogoUrl())}"
            . "  <td>{$currency->getName()}</td><td>"
            . "{$currency->getDailyPrice()}</td></tr>";
        }

        $this->response .= "</table>";
        $this->response .= "<h2>Today max price is {$market->maxPrice()}</h2>";

        return $this->response;
    }
    
    // this is most stupid task that i did in php 
    protected function printImage($url) : string
    {
        return "<td><img src='{$url}'></td>";
    }
}