<!-- Rizqy Nurfauzella 6706223074 D3 IF 46-04 -->

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userIdPetugas')->constrained('users')->onDelete('cascade');
            $table->foreignId('userIdPeminjam')->constrained('users')->onDelete('cascade');
            $table->date('tanggalPinjam');
            $table->date('tanggalSelesai');
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
        Schema::dropIfExists('transactions');
    }
};
