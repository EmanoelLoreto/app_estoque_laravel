<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Models\Produto;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function listarPokemons()
    {
      $client = new Client([(['base_uri' => 'http://pokeapi.co/'])]);

      $response = $client->request('GET', 'api/v2/pokemon');

      return view('pokemon.pokemons')->with('pokemons', $response);
    }
}
