<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffrirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('offrir', function (Blueprint $table) {

            $table->bigInteger('id_rapport');
            $table->foreign('id_rapport')
                ->references('id')
                ->on('rapport');

            $table->char('id_medicament');
            $table->foreign('id_medicament')
                ->references('id')
                ->on('medecin');
            $table->bigInteger('quantite')->nullable();

            $keys = array("id_medicament", "id_rapport");
            $table->primary($keys);
        });
*/
        Schema::create('offrirs', function (Blueprint $table) {
            $table->char('id_medicament');
            $table->integer('id_rapport');

            $table->integer('quantite')->nullable();

            $keys = array('id_rapport', 'id_medicament');
            $table->primary($keys);

            $table->foreign('id_rapport')
                ->references('id')
                ->on('rapports');
            $table->foreign('id_medicament')
                ->references('id')
                ->on('medicaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offrirs');
    }
}
