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
    
}