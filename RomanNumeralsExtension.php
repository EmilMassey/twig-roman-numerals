<?php

declare(strict_types=1);

namespace EmilMassey\Twig\RomanNumerals;

use Romans\Filter\IntToRoman;
use Romans\Filter\RomanToInt;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class RomanNumeralsExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('roman_to_arabic', [$this, 'romanToArabic']),
            new TwigFilter('arabic_to_roman', [$this, 'arabicToRoman']),
        ];
    }

    public function romanToArabic($number)
    {
        $filter = new RomanToInt();

        if ('' === $number) {
            return '';
        }

        return $filter->filter((string) $number);
    }

    public function arabicToRoman($number)
    {
        $filter = new IntToRoman();

        if ('' === $number) {
            return '';
        }

        return $filter->filter((int) $number);
    }
}
