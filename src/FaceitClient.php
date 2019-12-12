<?php

declare(strict_types = 1);

namespace FaceitClient;

use FaceitClient\Endpoints\Championships;
use FaceitClient\Endpoints\Games;
use FaceitClient\Endpoints\Hubs;
use FaceitClient\Endpoints\Matches;
use FaceitClient\Endpoints\Players;
use FaceitClient\Endpoints\Rankings;
use FaceitClient\Endpoints\Search;
use FaceitClient\Endpoints\Teams;
use FaceitClient\Endpoints\Tournaments;

class FaceitClient
{

    private $api_key;

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
     * @return Search
     */
    public function search(): Search
    {
        return new Search($this->api_key);
    }

    /**
     * @param string $id
     * @return Championships
     * @throws \Exception
     */
    public function championship(string $id): Championships
    {
        return new Championships($this->api_key, $id);
    }

    /**
     * @return Games
     */
    public function games(): Games
    {
        return new Games($this->api_key);
    }

    /**
     * @param string $id
     * @return Matches
     * @throws \Exception
     */
    public function matches(string $id): Matches
    {
        return new Matches($this->api_key, $id);
    }

    /**
     * @return Rankings
     */
    public function rankings(): Rankings
    {
        return new Rankings($this->api_key);
    }

    /**
     * @param string $id
     * @return Teams
     * @throws \Exception
     */
    public function teams(string $id): Teams
    {
        return new Teams($this->api_key, $id);
    }

    /**
     * @param string $id
     * @return Players
     * @throws \Exception
     */
    public function players(string $id): Players
    {
        return new Players($this->api_key, $id);
    }

    /**
     * @param string $id
     * @return Hubs
     * @throws \Exception
     */
    public function hubs(string $id): Hubs
    {
        return new Hubs($this->api_key, $id);
    }

    /**
     * @return Tournaments
     */
    public function tournaments()
    {
        return new Tournaments($this->api_key);
    }
    
}