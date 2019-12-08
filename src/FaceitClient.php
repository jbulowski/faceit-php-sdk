<?php

declare(strict_types = 1);

namespace FaceitClient;

class FaceitClient
{

    private const API_URI = 'https://open.faceit.com/data/v4/';

    private $api_key;

    private $request_endpoint;

    private $request_parameters;

    /**
     * FaceitClient constructor.
     * @param array $settings
     * @throws \Exception
     */
    public function __construct(array $settings)
    {
        if (!isset($settings['api_key'])) {
            throw new \Exception('Faceit API KEY is required!');
        }
        $this->api_key = $settings['api_key'];
    }

    /**
     * @return string
     */
    private function fullApiEndpoint(): string
    {
        return self::API_URI . $this->request_endpoint . '?' . http_build_query($this->request_parameters);
    }

    /**
     * @param string $part
     * @param bool $initialize
     */
    private function setRequestEndpoint(string $part, bool $initialize = false): void
    {
        if ($initialize) {
            $this->request_endpoint = '';
        }

        $this->request_endpoint .= ($this->request_endpoint === '') ? $part.'/' : $part;
    }

    /**
     * @return object
     */
    private function faceitApiCall(): object
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
     * @return FaceitClient
     */
    public function search(): FaceitClient
    {
        $this->setRequestEndpoint('search', true);
        return $this;
    }

    /**
     * @param string $name
     * @param array $additional_request_parameters
     * @return object
     */
    public function championships(string $name, array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint('championships');
        $this->request_parameters = ['name' => $name] + $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param string $name
     * @param array $additional_request_parameters
     * @return object
     */
    public function hubs(string $name, array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint('hubs');
        $this->request_parameters = ['name' => $name] + $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param string $name
     * @param array $additional_request_parameters
     * @return object
     */
    public function organizers(string $name, array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint('organizers');
        $this->request_parameters = ['name' => $name] + $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param string $nickname
     * @param array $additional_request_parameters
     * @return object
     */
    public function players(string $nickname, array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint('players');
        $this->request_parameters = ['nickname' => $nickname] + $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param string $nickname
     * @param array $additional_request_parameters
     * @return object
     */
    public function teams(string $nickname, array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint('teams');
        $this->request_parameters = ['nickname' => $nickname] + $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param string $name
     * @param array $additional_request_parameters
     * @return object
     */
    public function tournaments(string $name, array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint('tournaments');
        $this->request_parameters = ['name' => $name] + $additional_request_parameters;

        return $this->faceitApiCall();
    }
}