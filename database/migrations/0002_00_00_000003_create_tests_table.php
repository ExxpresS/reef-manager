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
        Schema::create('tests', function (Blueprint $table) {

            $table->increments('id');

            $table->timestampTz('created_at')->nullable();

            $table->timestampTz('updated_at')->nullable();

            $table->timestampTz('deleted_at')->nullable();

            $table->float('ph');

            $table->float('kh');

            $table->float('ca');

            $table->float('mg');

            $table->float('temperature');

            $table->float('densite');

            $table->float('nitrate');

            $table->float('phosphate');

            $table->integer('tanks_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
