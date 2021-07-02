<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
  public function home()
  {
    $characters = Character::all()->load( 'house' );
    return View::make('home', ['characters' => $characters]);
  }
}
