<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Poribar;
class AboutController extends Controller
{
  public  function emon()
  {
    //echo "I am emon function";
    //$val = 190;
    $val= User::count();
    $val_poribar = Poribar::count();
    return view ('about', compact('val', 'val_poribar'));
  }
    //
}
