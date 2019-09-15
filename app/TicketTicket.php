<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketTicket extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ticket_tickets';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ticket_id';
    /**
     * Indicates if the IDs are auto-incrementing.
     * Options: true -> Auto-Increment; false -> No Auto-Increment
     *
     * @var bool
     */
    public $incrementing = true;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    //protected $keyType = 'string';
    /**
     * Indicates if the model should be timestamped.
     * Options: true -> able; false -> enable
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    //protected $dateFormat = 'U';
    /**
     * Names variables CREATED_AT and UPDATED_AT (default)
     */
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Vizualizacion de información almacenada en el modelo
     * Dejar comentado en etapa de produccion a menos que
     * este se requiera
     */
    /*$modelos = App\TicketUser::all();
    foreach ($modelos as $modelo) {
        echo $modelo->name;
    }*/

    /**
     * The attributes that aren't mass assignable.
     * Lista negra del modelo
     *
     * @var array
     */
    protected $guarded = [];
    
    /*public function ticketUsers () {
        return $this->hasMany('App\TicketUser', 'ticket_users', 'ticket_id', 'usr_id');
    }*/
}
