<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Support\Facades\View;

class HouseController extends Controller
{
  public function list(  )
  {
    $houses = House::all();
    return View::make('maisons', ['houses' => $houses]);
  }

  public function house( $id )
  {
    $house = House::find( $id )->load('character');
    return View::make('maison', ['house' => $house]);
  }
}
