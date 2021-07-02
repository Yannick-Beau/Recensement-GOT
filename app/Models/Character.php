<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

class Character extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'character';

    public function title()
    {
      return $this->belongsTo( 'App\Models\Title' );
    }
    public function house()
    {
        return $this->belongsToMany( 'App\Models\House', 'house_has_characters', "character", "house" );
    }
}
