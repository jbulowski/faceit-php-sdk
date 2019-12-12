<?php

declare(strict_types = 1);

namespace FaceitClient\Endpoints;

use FaceitClient\FaceitResource;

class Players extends FaceitResource
{


    /**
     * Players constructor.
     * @param string $api_key
     * @param string $id
     * @throws \Exception
     */
    public function __construct(string $api_key, string $id)
    {
        if ($id === '') {
            throw new \Exception('Player ID is required!');
        }
        $this->api_key = $api_key;
        $this->setRequestEndpoint("players/{$id}");
    }

    /**
     * @return object
     */
    public function details(): object
    {
        return $this->faceitApiCall();
    }

    /**
     * @param string $game
     * @param array $additional_request_parameters
     * @return object
     */
    public function history(string $game, array $additional_request_parameters = []): object
    {
        $additional_request_parameters += ['game' => $game];
        $this->request_parameters = $additional_request_parameters;
        $this->setRequestEndpoint('history');

        return $this->faceitApiCall();
    }

    /**
     * @param array $additional_request_parameters
     * @return object
     */
    public function hubs(array $additional_request_parameters = []): object
    {
        $this->request_parameters = $additional_request_parameters;
        $this->setRequestEndpoint('hubs');

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
        $this->request_parameters = $additional_request_parameters;
        $this->setRequestEndpoint('tournaments');

        return $this->faceitApiCall();
    }
    
}