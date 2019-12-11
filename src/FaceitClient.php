<?php

declare(strict_types = 1);

namespace FaceitClient;

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
     * @return FaceitSearch
     */
    public function search(): FaceitSearch
    {
        return new FaceitSearch($this->api_key);
    }

    /**
     * @param string $id
     * @return FaceitChampionships
     * @throws \Exception
     */
    public function championship(string $id): FaceitChampionships
    {
        return new FaceitChampionships($this->api_key, $id);
    }

    /**
     * @return FaceitGames
     */
    public function games(): FaceitGames
    {
        return new FaceitGames($this->api_key);
    }

    /**
     * @param string $id
     * @return FaceitMatches
     * @throws \Exception
     */
    public function matches(string $id): FaceitMatches
    {
        return new FaceitMatches($this->api_key, $id);
    }

    /**
     * @return FaceitRankings
     */
    public function rankings(): FaceitRankings
    {
        return new FaceitRankings($this->api_key);
    }

    /**
     * @param string $id
     * @return FaceitTeams
     * @throws \Exception
     */
    public function teams(string $id): FaceitTeams
    {
        return new FaceitTeams($this->api_key, $id);
    }
    
}