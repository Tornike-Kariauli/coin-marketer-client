<?php

namespace ContractZero\CoinMarketerClient\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ContractZero\CoinMarketerClient\Services\CoinMarketerAPI;

class CryptocurrencyController extends Controller
{
    public function info(CoinMarketerAPI $coin_marketer_api)
    {
        $info = $coin_marketer_api->getInfo(['id' => '1,2,10']);

        return dd(compact('info'));
    }

    public function maps(CoinMarketerAPI $coin_marketer_api)
    {
        $maps = $coin_marketer_api->getMaps(['symbol' => 'BTC,USDT,BNB']);

        return dd(compact('maps'));
    }
}
