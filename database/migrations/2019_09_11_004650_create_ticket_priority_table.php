<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketPriorityTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ticket_priorities', function (Blueprint $table) {
            $table->bigIncrements('priority_id');
            $table->timestamps();

            $table->string('label');
            $table->integer('time_to_solve');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('ticket_priorities');
    }
}