<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings as BaseSettings;

class DefaultSettings extends BaseSettings
{
    public ?string $logo;
    public ?string $phone_number;
    public ?string $whatsapp;
    public static function group(): string
    {
        return 'default';
    }
}
