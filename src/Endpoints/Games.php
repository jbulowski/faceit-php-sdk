<?php

declare(strict_types = 1);

namespace FaceitClient\Endpoints;

use FaceitClient\FaceitResource;

class Games extends FaceitResource
{

    /**
     * Games constructor.
     * @param string $api_key
     */
    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
        $this->setRequestEndpoint("games");
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function details(array $additional_request_parameters = []): object
    {
        $this->request_parameters = $additional_request_parameters;

        return $this->faceitApiCall();
    }

    /**
     * @param string $id
     * @return object
     * @throws \Exception
     */
    public function game(string $id): object
    {
        if ($id === '') {
            throw new \Exception('Game ID is required!');
        }
        $this->setRequestEndpoint($id);

        return $this->faceitApiCall();
    }

    /**
     * @param string $id
     * @return object
     * @throws \Exception
     */
    public function parenOf(string $id): object
    {
        if ($id === '') {
            throw new \Exception('Game ID is required!');
        }
        $this->setRequestEndpoint("{$id}/parent");

        return $this->faceitApiCall();
    }
}