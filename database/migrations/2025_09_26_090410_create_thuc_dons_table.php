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
        Schema::create('thuc_dons', function (Blueprint $table) {
            $table->id();
             $table->string('ten_mon_an');
             $table->string('hinh_anh');
             $table->string('mo_ta_ngan');
             $table->integer('gia');
             $table->string('don_vi_tinh');
             $table->integer('id_the_loai');
             $table->integer('trang_thai')->default(1); // 1: available, 0: unavailable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thuc_dons');
    }
};
