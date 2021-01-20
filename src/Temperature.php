<?php

namespace Spatie\WorkshopUnitConversions;

class Temperature
{
    public float $celcius;

    public function __construct(float $celcius) {
        $this->celcius = $celcius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celcius * 1.8) + 3;
    }
}
