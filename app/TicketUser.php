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

    /**
     * The TicketUser that belong to the TicketPriority.
     */
    public function pivotTicketPriorities () {
        /* TableName de relacion 'ticket_priority_ticket_user' */
        //return $this->belongsToMany('App\TicketPriority');
        /* TableName de relacion asignada como segundo parametro */
        //return $this->belongsToMany('App\TicketPriority', 'ticket_tickets');
        /**
         * Pivot es para acceder a los datos de la tabla de relacion entre los modelos
         * Many to many
         * belongsToMany('Model','tableRelations','foreignKeydelInvocador','foreignKeydel Invocado')
         */
        return $this->belongsToMany('App\TicketPriority', 'ticket_tickets', 'fk_ticket_users', 'fk_ticket_priorities');
        /* Para redefinir la variable 'pivot' y asignar el nombre deseado */
        /*return $this->belongsToMany('App\TicketPriority')
                ->as('NewNamePivot')
                ->withTimestamps();*/
    }

    /**
     * Metodo para acceder a los ticket_priority desde ticket_user
     */
    /*$users = App\TicketUser::find(1);
    foreach ($users->priorities as $priority) {
        //
    }*/
    /*$users = App\TicketUser::find(1);
    foreach ($users->priorities as $priority) {
        echo $priority->pivot->created_at;
    }*/
    /**
     * Metodo para recorrer el modelo
     */
    //$priorities = App\User::find(1)->priorities()->orderBy('name')->get();
}