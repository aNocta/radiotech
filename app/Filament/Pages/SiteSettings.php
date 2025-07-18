<?php

namespace App\Filament\Pages;

use App\Settings\DefaultSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class SiteSettings extends SettingsPage
{
    static protected ?string $title = 'Настройки сайта';
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = DefaultSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\FileUpload::make('logo')->image()->imageEditor()->label("Логотип")->columnSpan(2),
                \Filament\Forms\Components\TextInput::make("phone_number")->mask("+7 (999) 999-99-99")->placeholder("+7 (___) ___-__-__")->label("Номер телефона"),
                \Filament\Forms\Components\TextInput::make("whatsapp")->label("Whatsapp"),
                \Filament\Forms\Components\TextInput::make("email")->label("Email"),
                \Filament\Forms\Components\FileUpload::make("footer_logo")->image()->imageEditor()->label("Логотип в подпале")->columnSpan(2),
                \Filament\Forms\Components\TextInput::make("footer_email")->label("Email внизу"),
                \Filament\Forms\Components\TextInput::make("address")->label("Адрес"),
            ]);
    }
}
