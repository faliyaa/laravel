<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use illuminate\Http\Request;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelanggan', function (Blueprint $table) {
        $table->integer('kode_pelanggan');
        $table->string('nama_pelanggan');
	    $table->string('tmpt_lahir');
	    $table->date('tgl_lahir');
	    $table->string('gender');
	    $table->string('alamat');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};