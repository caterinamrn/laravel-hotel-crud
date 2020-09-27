<?php

namespace App\Http\Controllers;

use App\Stanza;

use Illuminate\Http\Request;

class StanzaController extends Controller
{
  public function index(){

  $stanze = Stanza::all();

  return view("stanze", compact("stanze"));

  }

  public function show($id){

    $stanza = Stanza::findOrFail($id);
    return view("stanza", compact("stanza"));

  }
}
