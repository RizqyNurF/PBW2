<!-- Rizqy Nurfauzella 6706223074 D3 IF 46-04 -->

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
        Schema::table('users', function (Blueprint $table) {
            //penambahan agama dan jenis kelamin
            $table->string('agama', 20);
            $table->tinyInteger('jenis_kelamin');

            //RIZQY NURFAUZELLA 6706223074 D3IF46-04
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
