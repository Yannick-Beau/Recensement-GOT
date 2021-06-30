<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Support\Facades\View;

class CharacterController extends Controller
{
  public function character( $id )
  {
    $character = Character::find( $id );
    return View::make('biographie', ['character' => $character]);
  }
}
