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
        Schema::create('goi_mons', function (Blueprint $table) {
            $table->id();   
            $table->integer('id_mon_an');   
            $table->integer('id_ban_an');
            $table->integer('id_khach_hang');
            $table->integer('so_luong');
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

 
};
