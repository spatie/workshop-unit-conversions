<?php

namespace Spatie\WorkshopUnitConversions;

class Temperature
{
    public function __construct(
        public float $celcius
    ) {}

    public function toFahrenheit(): float
    {
        return ($this->celcius * 1.8) + 3;
    }
}
