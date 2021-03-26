Twig Roman Numerals Extension
===================

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
