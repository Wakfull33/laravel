<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = "commentaires";
    protected $filiable = array("id", "auteur_id", "content", "created_at", "update_at", "user_id", "active");
    public static $rules = array(
        "created" => array (
            "user_id" => 'required|integer',
            "content" => 'required|integer',
            "active" => 'boolean',
            "auteur" => 'required|string',
        ),
        "update" => array (
            "user_id" => 'required|integer',
            "content" => 'required|integer',
            "active" => 'boolean',
            "auteur" => 'required|string',
        ),
        "valide" => array (
            "active" => 'boolean',
        )
    );

    public function user()
    {
        return $this->belongsTo("App\User", "user_id", "id");
    }


}
