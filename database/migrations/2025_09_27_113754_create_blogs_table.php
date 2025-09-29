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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('mo_ta_ngan');
            $table->string('ngay_dang');
            $table->text('hinh_anh');
            $table->text('content');
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

   
};
