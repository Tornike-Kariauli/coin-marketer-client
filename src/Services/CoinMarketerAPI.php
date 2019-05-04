<?php

namespace ContractZero\CoinMarketerClient\Services;

use GuzzleHttp\Client;

class CoinMarketerAPI
{
    protected $http;
    protected $headers;

    public function __construct(Client $client)
    {
        $this->http = $client;
        $this->headers = [
            'Accept' => 'application/json',
            'X-CMC_PRO_API_KEY' => config('coinmarketer.api_key')
        ];
    }

    private function getResponse(string $uri = null, $parameters = null)
    {
        $full_path = config('coinmarketer.url');
        $full_path .= $uri;

        $request = $this->http->get($full_path, [
            'headers' => $this->headers,
            'query'   => $parameters,
        ]);

        $response = $request ? $request->getBody()->getContents() : null;
        $status = $request ? $request->getStatusCode() : 500;

        if ($response && $status === 200 && $response !== 'null') {
            return (object) json_decode($response);
        }

        return null;
    }

    public function getInfo($parameters)
    {
        return $this->getResponse('v1/cryptocurrency/info', $parameters);
    }

    public function getMaps($parameters)
    {
        return $this->getResponse('v1/cryptocurrency/map', $parameters);
    }
}
