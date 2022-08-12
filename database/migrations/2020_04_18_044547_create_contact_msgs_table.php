<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMsgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_msgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uic_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('message');
            $table->integer('isRead')->default(0);
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
        Schema::dropIfExists('contact_msgs');
    }
}
