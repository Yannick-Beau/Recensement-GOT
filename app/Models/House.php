<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'house';
    public function character()
    {
        return $this->hasMany( "App\Models\Character" );
    }
}
