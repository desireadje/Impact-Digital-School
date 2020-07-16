<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscriptionModel extends Model
{
    protected $table = "inscription";

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'age',
        'email',
        'niveau',
        'profession',
        'attente',
    ]; /** enumeration des champs qui sont autorisé a etre rempli pendant l'inscription */

}
