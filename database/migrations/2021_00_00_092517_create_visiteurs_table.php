<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->char('id',4)->primary();
            $table->char('nom',30)->nullable()->default('NULL');
            $table->char('prenom',30)->nullable()->default('NULL');
            $table->char('login',20)->nullable()->default('NULL');
            $table->char('password',100)->nullable()->default('NULL');
            $table->char('adresse',30)->nullable()->default('NULL');
            $table->char('cp',5)->nullable()->default('NULL');
            $table->char('ville',30)->nullable()->default('NULL');
            $table->date('date_embauche')->nullable();
            $table->bigInteger('timespan');
            $table->string('ticket',50)->nullable()->default('NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiteurs');
    }
}
