<!-- Rizqy Nurfauzella 6706223074 D3 IF 46-04 -->

<?php

use Egulias\EmailValidator\Parser\Comment;
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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->tinyInteger('jenis')->comment('1: Buku, 2: Majalah, 3: Cakram Digital');
            $table->integer('jumlahAwal');
            $table->integer('jumlahSisa');
            $table->integer('jumlahKeluar');
            $table->timestamps();
        //Rizqy Nurfauzella 6706223074 D3IF46-04
        });
    }
    /**
     * Reverse the migrations.
     *p
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
};
