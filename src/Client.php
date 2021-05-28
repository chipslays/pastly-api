<?php

namespace Pastly;

use Pastly\Traits\Methods;
use Pastly\Exceptions\RequestException;
use GuzzleHttp\Client as GuzzleHttpClient;
use Psr\Http\Message\ResponseInterface;

class Client
{
    use Methods;

    /**
     * This is a basic domain, better use it instead others.
     *
     * @var string
     */
    private const BASE_URI ='https://pastly.chipslays.ru/api/v1/';

    /**
     * @var GuzzleHttpClient
     */
    protected $httpClient;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->api = new GuzzleHttpClient(['base_uri' => self::BASE_URI]);
    }

    /**
     * Handle response from Pastly.
     *
     * @param ResponseInterface $response
     * @return Collection
     *
     * @throws RequestException
     */
    protected function handleResponse(ResponseInterface $response)
    {
        $response = json_decode($response->getBody()->getContents(), true);

        if ($response['ok'] === false) {
            throw new RequestException($response['error']);
        }

        return collection($response['result'] ?? []);
    }

    /**
     * Remove null values from array.
     *
     * @param array $data
     * @return array
     */
    protected function prepareRequestData(array $data): array
    {
        return array_filter($data, function ($item) {
            return $item !== null;
        });
    }
}
