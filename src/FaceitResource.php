<?php

declare(strict_types = 1);

namespace FaceitClient;

abstract class FaceitResource
{

    private const API_URI = 'https://open.faceit.com/data/v4';

    protected $request_endpoint;

    protected $request_parameters;

    protected $api_key;

    /**
     * @return string
     */
    protected function fullApiEndpoint(): string
    {
        if (empty($this->request_parameters)) {
            return self::API_URI . $this->request_endpoint;
        }
        return self::API_URI . $this->request_endpoint . '?' . http_build_query($this->request_parameters);
    }

    /**
     * @return object
     */
    protected function faceitApiCall(): object
    {
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $this->fullApiEndpoint(),
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer {$this->api_key}"
            ]
        ]);

        return json_decode(curl_exec($ch), false, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $part
     * @param bool $initialize
     */
    protected function setRequestEndpoint(string $part, bool $initialize = false): void
    {
        if ($initialize) {
            $this->request_endpoint = '';
        }
        $this->request_endpoint .= ($this->request_endpoint === '') ? $part.'/' : '/'.$part;
    }
}