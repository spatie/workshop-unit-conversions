<?php

namespace Spatie\WorkshopUnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\WorkshopUnitConversions\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celcius_to_fahrenheit()
    {
        $temperature = new Temperature(15);

        $this->assertEquals(30.0, $temperature->toFahrenheit());
    }
}
