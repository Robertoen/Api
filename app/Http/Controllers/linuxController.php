<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linuxController extends Controller
{
   public function index(){

   		return view('linux',['blade' => 'View do Controller','pedidos' => ['pedido1','pedido2']]);

   		// return ['ahsuahds' => 'Json no Laravel'];
   }
}
