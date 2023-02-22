<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('address', 255);
            $table->string('phone', 14);
            $table->string('photo', 255)->nullable();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('position_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->foreign('department_id')
                ->references('id')
                ->on('departments');
            $table->foreign('position_id')
                ->references('id')
                ->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
