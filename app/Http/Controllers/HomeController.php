<?php

namespace App\Http\Controllers;

use App\Models\Client; // Asegúrate de importar el modelo correspondiente

class HomeController extends Controller
{
    public function showHome()
    {
        $winner = $this->determineWinner(); 
        return view('home', compact('winner'));
    }

    private function determineWinner()
    {
        return Client::where('is_winner', true)->first();
    }
}