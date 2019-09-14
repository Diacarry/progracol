<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToTicketTicketTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('ticket_tickets', function (Blueprint $table) {
            $table->index('ticket_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('ticket_tickets', function (Blueprint $table) {
            $table->dropIndex('ticket_tickets_ticket_id_index');
        });
    }
}