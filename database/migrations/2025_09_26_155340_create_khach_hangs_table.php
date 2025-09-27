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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_khach_hang');
            $table->string('ngay_sinh');
            $table->string('dia_chi');
            $table->string('so_dien_thoai')->unique();
            $table->string('mat_khau');
            $table->timestamps();
        });
    }
};
