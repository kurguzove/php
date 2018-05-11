<?php

namespace Cryptocurrency\Task1;

class Dogecoin implements Currency {

	protected $name = 'Dogecoin';
	protected $logoUrl = 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';
	protected $price;

	public function __construct(float $price)
	{
		$this->price = $price;
	}

	public function getName(): string
	{
		return $this->name;
	}

    public function getDailyPrice(): float
    {
    	return $this->price;
    }

    public function getLogoUrl(): string
    {
    	return $this->logoUrl;
    }
}