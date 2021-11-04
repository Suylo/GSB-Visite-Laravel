<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->integer('id',11);
            $table->date('date')->nullable();
            $table->string('motif',100)->nullable()->default('NULL');
            $table->string('bilan',100)->nullable()->default('NULL');

            $table->char('id_visiteur',4);
            $table->foreign('id_visiteur')
                ->references('id')
                ->onDelete('CASCADE')
                ->on('visiteurs');
            $table->unsignedBigInteger('id_medecin');
            $table->foreign('id_medecin')
                ->references('id')
                ->onDelete('CASCADE')
                ->on('medecins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapport');
    }
}
