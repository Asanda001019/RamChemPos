<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Locale extends BaseConfig
{
    public string $defaultLocale = 'en';
    public array $supportedLocales = ['en'];
    public bool $negotiateLocale = false;
    public string $localeCookieName = 'app_locale';
    public int $localeCookieExpires = 86400;

    public static function getDefault(): string
    {
        return 'en';
    }
}
