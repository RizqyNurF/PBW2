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
            //penambahan kolom baru
            $table->string('username', 100);
            $table->string('address', 1000);
            $table->string('phoneNumber', 100);
            $table->date('birthdate')->nullable();

            // Modifikasi kolom
            $table->renameColumn('name', 'fullname');
            $table->string('email')->nullable()->change();

        });

        //Rizqy Nurfauzella 6706223074 D3IF46-04
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
