<?php

namespace App\Models;
/* */
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey="id";
    protected $fillable=[
        'id',
        'nom_du_contact',
        'email',
        'telephone' 
    ];
}
