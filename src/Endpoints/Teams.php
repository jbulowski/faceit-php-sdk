<?php

declare(strict_types = 1);

namespace FaceitClient\Endpoints;

use FaceitClient\FaceitResource;

class Teams extends FaceitResource
{

    /**
     * Teams constructor.
     * @param $api_key
     * @param $id
     * @throws \Exception
     */
    public function __construct($api_key, $id)
    {
        if ($id === '') {
            throw new \Exception('Team ID is required!');
        }
        $this->api_key = $api_key;
        $this->setRequestEndpoint("teams/{$id}");
    }

    /**
     * @return object
     */
    public function details(): object
    {
        return $this->faceitApiCall();
    }

    /**
     * @param string $game_id
     * @return object
     * @throws \Exception
     */
    public function stats(string $game_id): object
    {
        if ($game_id === '') {
            throw new \Exception('Game ID is required!');
        }
        $this->setRequestEndpoint("stats/{$game_id}");

        return $this->faceitApiCall();
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function tournaments(array $additional_request_parameters = []): object
    {
        $this->setRequestEndpoint('tournaments');
        $this->request_parameters = $additional_request_parameters;

        return $this->faceitApiCall();
    }
}