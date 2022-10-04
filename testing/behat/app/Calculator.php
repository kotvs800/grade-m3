<?php

declare(strict_types=1);

namespace App;

class Calculator
{
    public function __construct(
        private int $current = 0,
    ) {
    }

    public function input(int $number): void
    {
        $this->current = $number;
    }

    public function add(int $number): void
    {
        $this->current += $number;
    }

    public function sub(int $number): void
    {
        $this->current -= $number;
    }

    public function multiple(int $number): void
    {
        $this->current *= $number;
    }

    public function divide(int $number): void
    {
        $this->current /= $number;
    }

    public function result(): int
    {
        return $this->current;
    }
}
