<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_info', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->string('name');
            $table->string('dob');
            $table->string('email');
            $table->string('education');
            $table->string('job');
            $table->string('position');
            $table->string('description');
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
        Schema::dropIfExists('member_infos');
    }
}
