<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketUser extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ticket_users';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';
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

    public function priorities () {
        /* TableName de relacion 'ticket_priority_ticket_user' */
        return $this->belongsToMany('App\TicketPriority');
        /* TableName de relacion asignada como segundo parametro */
        return $this->belongsToMany('App\TicketPriority', 'ticket_tickets');
        /* Adicional enviar las llaves primarias del modelo que
           define y el modelo  al que se une */
        return $this->belongsToMany('App\TicketPriority', 'ticket_tickets', 'user_id', 'priority_id');
    }

    /**
     * Metodo para acceder a los ticket_priority desde ticket_user
     */
    /*$user = App\TicketUser::find(1);
    foreach ($user->priorities as $role) {
        //
    }*/
    /**
     * Metodo para recorrer el modelo
     */
    //$priorities = App\User::find(1)->priorities()->orderBy('name')->get();
}