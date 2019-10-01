<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class WundergroundWeatherValidationTest extends TestCaseSymconValidation
{
    public function testValidateWundergroundWeather(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateWundergroundWeatherModule(): void
    {
        $this->validateModule(__DIR__ . '/../WundergroundWeather');
    }
}