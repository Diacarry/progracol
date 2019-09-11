<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTicketPriorityTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('ticket_priority', function (Blueprint $table) {
            $table->index('id');//priority_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('ticket_priority', function (Blueprint $table) {
            $table->dropIndex('ticket_priority_id_index');
        });
    }
}