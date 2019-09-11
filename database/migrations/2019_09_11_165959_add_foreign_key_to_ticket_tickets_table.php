<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToTicketTicketsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('ticket_tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_ticket_users');
            $table->unsignedBigInteger('fk_ticket_priorities');

            $table->foreign('fk_ticket_users')->references('user_id')->on('ticket_users');
            $table->foreign('fk_ticket_priorities')->references('priority_id')->on('ticket_priorities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('ticket_tickets', function (Blueprint $table) {
            $table->dropForeign('ticket_tickets_fk_ticket_users_foreign');
            $table->dropForeign('ticket_tickets_fk_ticket_priorities_foreign');

            $table->dropColumn('fk_ticket_users');
            $table->dropColumn('fk_ticket_priorities');
        });
    }
}