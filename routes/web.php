<?php

use App\Models\Slide;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $settings = app(\App\Settings\DefaultSettings::class);
    $phone_number = $settings->phone_number;
    if($phone_number){
        $phone_number_formated = str_replace(["(", ")", "-", " "],'',$phone_number);
    }
    $slides = Slide::all();
    $services = \App\Models\Service::all();
    return view('main', [
        "logo" => $settings->logo,
        "phone_number" => $phone_number,
        "phone_number_formated" => $phone_number_formated ?? "",
        "whatsapp" => $settings->whatsapp,
        "slides" => $slides,
        "services" => $services,
    ]);
})->name('home');

