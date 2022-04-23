<?php

namespace Beem\Laravel;

use GuzzleHttp\Client;
use InvalidArgumentException;


class Beem
{
    protected array $options;

    protected Client $httpClient;

    /**
     *
     * @param array $options
     * @param Client|null $httpClient
     *
     * @throws InvalidArgumentException
     */
    public function __construct(array $options = [], ?Client $httpClient = null)
    {
        if (! array_key_exists('api_key', $options)) {
            throw new InvalidArgumentException("apiKey is required.");
        }

        if (! array_key_exists('api_secret', $options)) {
            throw new InvalidArgumentException("apiKey is required.");
        }

        if (! array_key_exists('environment', $options)) {
            $options['environment'] = 'testing';
        }

        $this->options = $options;
        $this->httpClient = $this->makeClient($options, $httpClient);
    }

    protected function makeClient(array $options, ?Client $client = null): Client
    {
        return ($client instanceof Client) ? $client : new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Basic ' . base64_encode($options['api_key'] . ':' . $options['secret_key']),
                'Content-Type' => 'application/json',
            ],
        ]);
    }

}
