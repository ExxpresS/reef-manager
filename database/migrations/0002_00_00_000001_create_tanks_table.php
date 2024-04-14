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
        Schema::create('tanks', function (Blueprint $table) {

            $table->increments('id');

            $table->timestampTz('created_at')->nullable();

            $table->timestampTz('updated_at')->nullable();

            $table->integer('litre');

            $table->string('title');

            $table->timestampTz('date_add');

            $table->timestampTz('deleted_at')->nullable();

            $table->integer('users_id');


            $table->index(['id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanks');
    }
};
