<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Support\Facades\View;

class CharacterController extends Controller
{
  public function character( $id )
  {
    $character = Character::find( $id )->load('title', 'house');
    $mother    = Character::find( $character->mother_id );
    $father    = Character::find( $character->father_id );
    return View::make
    ('biographie',
        ['character' => $character,
        'mother'    => $mother,
        'father'    => $father
        ]
    );
  }
}
