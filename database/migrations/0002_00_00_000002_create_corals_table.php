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
        Schema::create('corals', function (Blueprint $table) {

            $table->increments('id');

            $table->timestampTz('created_at')->nullable();

            $table->timestampTz('updated_at')->nullable();

            $table->string('name');

            $table->dateTimeTz('date_add');

            $table->integer('tanks_id');

            $table->timestampTz('deleted_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corals');
    }
};
