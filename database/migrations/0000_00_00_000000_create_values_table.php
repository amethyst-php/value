<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateValuesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.value.data.value.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('valuable_type')->nullable();
            $table->integer('valuable_id')->nullable();
            $table->integer('key_id')->unsigned();
            $table->foreign('key_id')->references('id')->on(Config::get('amethyst.taxonomy.data.taxonomy.table'));
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.value.data.value.table'));
    }
}
