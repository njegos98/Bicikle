<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaTabeleBiciklas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('biciklas',function (Blueprint $table){
        //     $table->renameColumn('stanje','STANJE');
        // });
        // Schema::table('biciklas', function (Blueprint $table) {
        //     $table->string('boja', 60)->change();
        // });
        // Schema::table('biciklas',function (Blueprint $table){
        //     $table->string('test');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('biciklas',function (Blueprint $table){
        //     $table->dropColumn('test');
        //   $table->renameColumn('STANJE','stanje');
        //   });
    }
}
