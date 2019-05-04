## Introduction

Coin Marketer Client Package for the Laravel framework.

## Installation

To get started with Coin Marketer Client, simply run:

    composer require contract-zero/coin-marketer-client

    composer dump-autoload

and:

    php artisan vendor:publish

Insert your api_key in config/coinmarketer.php file

## Basic Usage

You can inject ContractZero\CoinMarketerClient\Services\CoinMarketerAPI class instance in Controller function and make calls to class methods.

usage examples can be found in package src/Http/Controllers/CryptocurrencyController.php file

## License

Coin Marketer Client is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
