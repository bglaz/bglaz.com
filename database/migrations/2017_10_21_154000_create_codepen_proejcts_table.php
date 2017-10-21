<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodepenProejctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codepen_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('sub_title')->nullable();
            $table->text('description');
            $table->text('notes')->nullable();
            $table->string('codepen_id');
            $table->boolean('active')->default(false);
            $table->unsignedInteger('sort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codepen_proejcts');
    }
}
