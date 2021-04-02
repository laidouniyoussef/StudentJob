<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('job_desc');
            $table->text('address');
            $table->text('skills');
            $table->integer('nbr_profils_needed');
            $table->float('salaire');
            $table->string('job_nature');
            $table->string('duration');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('job_categories')->onDelete('cascade');
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
        Schema::dropIfExists('annonces');
    }
}
