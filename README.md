Twig Roman Numerals Extension
===================

[![Tests](https://github.com/EmilMassey/twig-roman-numerals/actions/workflows/php.yml/badge.svg)](https://github.com/EmilMassey/twig-roman-numerals/actions/workflows/php.yml)

A Twig extension for converting roman to arabic numerals and vice-versa.

## Installation
```
composer require emilmassey/twig-roman-numerals
```

## Usage
For Symfony usage you'll want to add it as a service and tag it for Twig.

```yml
# config/services.yml
services:
    twig.extension.roman_numerals:
        class: EmilMassey\Twig\RomanNumerals\RomanNumeralsExtension
        tags:
            - { name: twig.extension }
