<?php

namespace EmilMassey\Twig\RomanNumerals\Tests;

use EmilMassey\Twig\RomanNumerals\RomanNumeralsExtension;
use Twig\Test\IntegrationTestCase;

class IntegrationTest extends IntegrationTestCase
{
    public function getExtensions()
    {
        return [
            new RomanNumeralsExtension(),
        ];
    }

    public function getFixturesDir()
    {
        return __DIR__.'/Fixtures/';
    }
}
