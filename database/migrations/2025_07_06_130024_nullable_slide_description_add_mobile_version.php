<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('slides', function (Blueprint $table) {
            $table->string("mobile_image")->nullable();
            $table->text("description")->nullable()->change();
        });
    }

    public function down(): void
    {

    }
};
