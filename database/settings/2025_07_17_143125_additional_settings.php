<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add("default.footer_logo");
        $this->migrator->add("default.footer_email");
        $this->migrator->add("default.address");
    }
};
