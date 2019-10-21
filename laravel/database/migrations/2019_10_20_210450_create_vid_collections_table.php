<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidCollectionsTable extends Migration
{
  
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vid_collections', function (Blueprint $table) {
            $table->bigIncrements('video_id');
            $table->string('title');
            $table->enum('video_type', ['TVSHOW', 'MOVIES']);
            $table->string('language');
            $table->decimal('rating',3,1);
            $table->string('synopsis');
            $table->string('plot');
            $table->string('image');
            $table->integer('length');
            $table->string('director');
            $table->integer('num_of_season')->length(4)->unsigned();
            $table->date('release_date');
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
        Schema::dropIfExists('vid_collections');
    }
}
