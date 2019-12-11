<?php

declare(strict_types = 1);

namespace FaceitClient;

class FaceitSearch extends FaceitResource
{

    /**
     * FaceitSearch constructor.
     */
    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
        $this->setRequestEndpoint('search');
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