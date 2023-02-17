<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental', function (Blueprint $table) {
            $table->id();
            $table->string('driver');
            $table->ipAddress('nip');
            $table->longText('keperluan');
            $table->string('jenis_kendaraan');
            $table->ipAddress('identitas_kendaraan');
            $table->string('penanggung_jawab');
            $table->integer('status');
            $table->boolean('is_active');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental');
    }
};
