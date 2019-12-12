<?php

declare(strict_types = 1);

namespace FaceitClient\Endpoints;

use FaceitClient\FaceitResource;

class Tournaments extends FaceitResource
{

    /**
     * Tournaments constructor.
     * @param string $api_key
     */
    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
        $this->setRequestEndpoint('tournaments');
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function all(array $additional_request_parameters = []): object
    {
        $this->request_parameters = $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param string $id
     * @param array $additional_request_parameters
     * @return object
     * @throws \Exception
     */
    public function tournament(string $id, array $additional_request_parameters = []): object
    {
        if ($id === '') {
            throw new \Exception('Tournament ID is required!');
        }
        $this->setRequestEndpoint($id);

        if (!empty($additional_request_parameters)) {
            $this->request_parameters = ['expanded' => implode(',', $additional_request_parameters)];
        } else {
            $this->request_parameters = $additional_request_parameters;
        }

        return $this->faceitApiCall();
    }

    /**
     * @param string $id
     * @return object
     * @throws \Exception
     */
    public function brackets(string $id): object
    {
        if ($id === '') {
            throw new \Exception('Tournament ID is required!');
        }
        $this->setRequestEndpoint("{$id}/brackets");

        return $this->faceitApiCall();
    }

    /**
     * @param string $id
     * @param array $additional_request_parameters
     * @return object
     * @throws \Exception
     */
    public function matches(string $id, array $additional_request_parameters = []): object
    {
        if ($id === '') {
            throw new \Exception('Tournament ID is required!');
        }
        $this->setRequestEndpoint("{$id}/matches");

        $this->request_parameters = $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param string $id
     * @param array $additional_request_parameters
     * @return object
     * @throws \Exception
     */
    public function teams(string $id, array $additional_request_parameters = []): object
    {
        if ($id === '') {
            throw new \Exception('Tournament ID is required!');
        }
        $this->setRequestEndpoint("{$id}/teams");

        $this->request_parameters = $additional_request_parameters;

        return $this->faceitApiCall();
    }

}