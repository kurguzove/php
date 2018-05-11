<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    public function generate(): \Generator
    {
        foreach ($this->getThisTrash() as $emozzy) {
            yield $emozzy;
        }
    }

    private function getThisTrash() : array
    {
        return ['🚀', '🚃', '🚄', '🚅', '🚇'];
    }
}