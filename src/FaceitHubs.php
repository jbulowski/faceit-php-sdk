<?php

declare(strict_types = 1);

namespace FaceitClient;

class FaceitHubs extends FaceitResource
{

    /**
     * FaceitHubs constructor.
     * @param string $api_key
     * @param string $id
     * @throws \Exception
     */
    public function __construct(string $api_key, string $id)
    {
        if ($id === '') {
            throw new \Exception('Hub ID is required!');
        }
        $this->api_key = $api_key;
        $this->setRequestEndpoint("hubs/{$id}");
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
        $this->request_parameters = $additional_request_parameters;
        $this->setRequestEndpoint('matches');

        return $this->faceitApiCall();
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function members(array $additional_request_parameters = []): object
    {
        $this->request_parameters = $additional_request_parameters;
        $this->setRequestEndpoint('members');

        return $this->faceitApiCall();
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function roles(array $additional_request_parameters = []): object
    {
        $this->request_parameters = $additional_request_parameters;
        $this->setRequestEndpoint('roles');

        return $this->faceitApiCall();
    }

    /**
     * @return object
     */
    public function rules(): object
    {
        $this->setRequestEndpoint('rules');

        return $this->faceitApiCall();
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function stats(array $additional_request_parameters = []): object
    {
        $this->request_parameters = $additional_request_parameters;
        $this->setRequestEndpoint('stats');

        return $this->faceitApiCall();
    }
    
}