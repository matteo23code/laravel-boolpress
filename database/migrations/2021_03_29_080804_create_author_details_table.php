<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateAuthorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->timestamps();

            $table->text('bio');
            $table->string('website', 2048);
            $table->string('image', 2048);


            $table->foreign('author_id')
                ->references('id')
                ->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_details');
    }
}
