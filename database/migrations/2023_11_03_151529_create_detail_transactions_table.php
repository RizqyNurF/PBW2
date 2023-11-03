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
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transactionId')->constrained('transactions')->onDelete('cascade');
            $table->foreignId('collectionId')->constrained('collections')->onDelete('cascade');
            $table->date('tanggalKembali');
            $table->tinyInteger('status');
            $table->String('keterangan', 1000);
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
        Schema::dropIfExists('detail_transactions');
    }
};
