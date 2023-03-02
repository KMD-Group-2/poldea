<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeaCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idea_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idea_id');
            $table->unsignedBigInteger('user_id');
            $table->text('comment');
            $table->tinyInteger('anonymous')->default(0);
            $table->timestamps();

            $table->foreign('idea_id')->on('ideas')->references('id')->onDelete('cascade');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('idea_comments');
    }
}
