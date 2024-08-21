<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create("settings", function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key')->unique()->index();
            $table->string("category")->nullable();
            $table->longText('value')->nullable();
        });
    }
};
