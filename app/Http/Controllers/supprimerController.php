<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livre;
class supprimerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    }

    /**
     * Remove the specifique ressource from storage
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(livre $livre)
    {
      $livre = App\livre::delete([
      'id' => request('id'),
      'Nom' => request('Nom'),
      'Auteur' => request('Auteur'),
      'Date' => request('Date'),
    ]);
    return view('home');

    }
}
