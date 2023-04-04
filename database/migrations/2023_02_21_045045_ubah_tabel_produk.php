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
        Schema::rename('produk', 'barang');

        //Untuk mengecek keberadaan suatu table
        if (Schema::hasTable('produk')) {
            # code...
        }

        //Untuk mengecek kolom suatu table
        if (Schema::hasColumn('produk', 'nama')) {
            #code...
        };

        //Untuk menghapus nama table ketika nama table ditemukan
        Schema::dropIfExists('produk');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
