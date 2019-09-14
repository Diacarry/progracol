<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketUserTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ticket_users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->timestamps();

            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('hours_days');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('ticket_users');
    }
}