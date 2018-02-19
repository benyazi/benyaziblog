<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_items', function(Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 255);
            $table->string('company_link', 255)->nullable();
            $table->string('company_location', 255)->nullable();
            $table->text('company_description')->nullable();
            $table->date('start_work');
            $table->date('end_work')->nullable();
            $table->text('experience')->nullable();
            $table->index(['company_name','start_work']);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_items');
    }
}
