<?php

namespace Rexfordnyrk\Tempconv;

class TemperatureConverter
{
    //Caller must provide the temperature value and the unit either C Celsius or F Fahrenheit
    public function convert($temperature, $unit)
    {
        //Checking whether the unit we're working with is Celsius or Fahrenheit
        if ($unit === 'C') {
            $fahrenheit = ($temperature * 9 / 5) + 32;
            return $fahrenheit;
        } elseif ($unit === 'F') {
            $celsius = ($temperature - 32) * 5 / 9;
            return $celsius;
        } else {
            //Throwing error if the unit provided is neither C nor F
            throw new \InvalidArgumentException('Invalid unit, only C (Celsius) or F (Fahrenheit) are allowed');
        }
    }
}