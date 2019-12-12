<?php

declare(strict_types = 1);

namespace FaceitClient\Endpoints;

use FaceitClient\FaceitResource;

class Matches extends FaceitResource
{

    /**
     * Matches constructor.
     * @param string $api_key
     * @param string $id
     * @throws \Exception
     */
    public function __construct(string $api_key, string $id)
    {
        if ($id === '') {
            throw new \Exception('Match ID is required!');
        }
        $this->api_key = $api_key;
        $this->setRequestEndpoint("matches/{$id}");
    }

    /**
     * @return object
     */
    public function details(): object
    {
        return $this->faceitApiCall();
    }

    /**
     * @return object
     */
    public function stats(): object
    {
        $this->setRequestEndpoint('stats');
        return $this->faceitApiCall();
    }

}