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
        Schema::create('quan_ly_bans', function (Blueprint $table) {
            $table->id();
            $table->integer('so_cho_ngoi');
            $table->integer('id_khach_hang')->nullable();
            $table->date('thoi_gian_dat_ban')->nullable();
            $table->integer('trang_thai')->default(0); // 0: trống, 1: có khách
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

  
};
