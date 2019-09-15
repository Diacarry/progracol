<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketPriority extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ticket_priorities';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'priority_id';
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

    /**
     * The TicketPriority that belong to the TicketUser.
     */
    public function pivotTicketUsers () {
        /**
         * Pivot es para acceder a los datos de la tabla de relacion entre los modelos
         * Many to many
         * belongsToMany('Model','tableRelations','foreignKeydelInvocador','foreignKeydel Invocado')
         */
        return $this->belongsToMany('App\TicketUser', 'ticket_tickets', 'fk_ticket_priorities', 'fk_ticket_users');
        /* Add Columnas a la tabla derelacion entre TicketUser y TicketPriority */
        //return $this->belongsToMany('App\TicketUser')->withPivot('ticket_id','subjet', 'description','status');
    }
}