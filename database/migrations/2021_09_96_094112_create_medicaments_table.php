<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->string('id',30)->primary();
            $table->string('nom_commercial',80);

            $table->string('id_famille',10);
            $table->foreign('id_famille')
                ->references('id')
                ->onDelete('CASCADE')
                ->on('familles');

            $table->string('composition',100);
            $table->string('effets',100);
            $table->string('contre_indications',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicaments');
    }
}
