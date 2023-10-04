<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('memo1', function (Blueprint $table) {
            $table->id(); // 기본키 열 (id) 추가
            $table->string('kind', 50);
            $table->string('jap_pron', 150);
            $table->string('jap_lang', 150);
            $table->string('jap_mean', 150);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memo1');
    }
};
