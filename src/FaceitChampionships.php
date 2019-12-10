<?php

declare(strict_types = 1);

namespace FaceitClient;

class FaceitChampionships extends FaceitResource
{


    /**
     * FaceitChampionships constructor.
     */
    public function __construct(string $api_key, string $id)
    {
        if ($id === '') {
            throw new \Exception('Championship ID is required!');
        }
        $this->api_key = $api_key;
        $this->setRequestEndpoint("championships/{$id}");
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function details(array $additional_request_parameters = []): object
    {
        $this->request_parameters = $additional_request_parameters;
        if (!empty($additional_request_parameters)) {
            $this->request_parameters = ['expanded' => implode(',', $additional_request_parameters)];
        }

        return $this->faceitApiCall();
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function matches(array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint("matches");
        $this->request_parameters = $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function subscriptions(array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint("subscriptions");
        $this->request_parameters = $additional_request_parameters;

        return $this->faceitApiCall();
    }
    
}