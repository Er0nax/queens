<?php

namespace config;

/**
 * Settings
 */
class Settings
{
    /**
     * @var string
     */
    public string $version = '1.0.0';
    public ?string $mainUrl = null;
    public string $pageTitle = 'Queens Logistic GmbH';

    /**
     * constructor
     */
    public function __construct()
    {
        $this->setMainUrl();
    }

    /**
     * sets the current url based on the users remote address
     * @return void
     */
    private function setMainUrl(): void
    {
        if ($_SERVER['HTTP_HOST'] == 'localhost') {
            $this->mainUrl = 'http://localhost/queens/public/';
        } else{
            $this->mainUrl = 'https://queens.eronax.de/';
        }
    }
}