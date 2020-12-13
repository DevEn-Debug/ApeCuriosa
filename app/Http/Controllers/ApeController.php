<?php

namespace App\Http\Controllers;
use App\Honey;
use Illuminate\Http\Request;

class ApeController extends Controller
{
  public function mieli(){
      $honeys = Honey::all()->where('type' ,'=','miele');
      return view('inostrimieli', compact('honeys'));
  }
  public function prodotti(){
      $products= Honey::all()->where('type' ,'=','prodotti');
      return view('prodotti', compact('products'));
  }
}
