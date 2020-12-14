<?php

namespace App\Http\Controllers;
use App\Honey;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApeController extends Controller
{
  public function mieli(){
      $honeys = DB::table('honeys')->where([['available' ,'=','1'],['type' ,'=','miele']] )
                 ->select('title','image') ->groupBy('title','image')
                 ->get();
      return view('inostrimieli', compact('honeys'));
  }
  public function prodotti(){
      $products= DB::table('honeys')->where([['available' ,'=','1'],['type' ,'=','prodotti']] )
                 ->select('title','image') ->groupBy('title','image')
                 ->get();
      return view('prodotti', compact('products'));
  }
  public function show($title){

      $honey=Honey::all()->where('title' ,'=',$title);

      $samedata = DB::table('honeys')->where('title' ,'=',$title )
                 ->select('title','image','description') ->groupBy('title','image','description')
                 ->first();

      return view('show', compact('honey','samedata'));
  }
}
