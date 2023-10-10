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
            $table     ->id();
            $table     ->string('namaKoleksi');
            $table     ->tinyInteger('jenisKoleksi')->comment('1: Buku, 2: Majalah, 3: Cakram Digital');
            $table     ->integer('jumlahKoleksi');
            $table     ->timestamps();

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
