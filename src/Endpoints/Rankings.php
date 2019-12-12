<?php

declare(strict_types = 1);

namespace FaceitClient\Endpoints;

use FaceitClient\FaceitResource;

class Rankings extends FaceitResource
{

    /**
     * Rankings constructor.
     * @param string $api_key
     */
    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
        $this->setRequestEndpoint('rankings');
    }

    /**
     * @param string $id
     * @return $this
     * @throws \Exception
     */
    public function game(string $id)
    {
        if ($id === '') {
            throw new \Exception('Game ID is required!');
        }
        $this->setRequestEndpoint("games/{$id}");

        return $this;
    }

    /**
     * @param string $id
     * @return $this
     * @throws \Exception
     */
    public function region(string $id)
    {
        if ($id === '') {
            throw new \Exception('Region ID is required!');
        }
        $this->setRequestEndpoint("regions/{$id}");

        return $this;
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
     * @param array $additional_request_parameters
     * @return object
     * @throws \Exception
     */
    public function player(string $id, array $additional_request_parameters = []): object
    {
        if ($id === '') {
            throw new \Exception('Region ID is required!');
        }
        $this->setRequestEndpoint("players/{$id}");
        $this->request_parameters = $additional_request_parameters;

        return $this->faceitApiCall();
    }
    
}