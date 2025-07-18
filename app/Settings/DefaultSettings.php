<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings as BaseSettings;

class DefaultSettings extends BaseSettings
{
    public ?string $logo;
    public ?string $phone_number;
    public ?string $whatsapp;
    public ?string $footer_logo;
    public ?string $footer_email;
    public ?string $address;

    public static function group(): string
    {
        return 'default';
    }
}
