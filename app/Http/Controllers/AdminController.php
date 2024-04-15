<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class AdminController extends Controller
{
    public function showClients()
    {
        $clients = Client::all();
        return view('admin', compact('clients'));
    }

    public function selectWinner()
    {
        // Buscar al posible ganador actual
        $currentWinner = Client::where('is_winner', true)->first();

        // Si hay un ganador actual, cambiar su estado a false
        if ($currentWinner) {
            $currentWinner->is_winner = false;
            $currentWinner->save();
        }

        // Seleccionar un nuevo ganador aleatorio
        $newWinner = Client::inRandomOrder()->first();

        // Actualizar el campo is_winner del nuevo ganador a true
        $newWinner->is_winner = true;
        $newWinner->save();

        return redirect()->route('clients.list')->with('success', '¡El ganador ha sido seleccionado y actualizado correctamente!');
    }

    public function exportClients()
    {
        try {
            $clients = Client::all();

            $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());

            // Encabezados del archivo CSV
            $csv->insertOne(['Nombre', 'Apellido', 'Cédula', 'Ciudad', 'Teléfono', 'Correo Electrónico']);

            // Datos de los clientes
            foreach ($clients as $client) {
                $csv->insertOne([$client->name, $client->last_name, $client->identification, $client->city, $client->phone, $client->email]);
            }

            // Descargar el archivo CSV
            $filename = 'clients.csv';
            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ];

            return new Response($csv->output(), 200, $headers);
        } catch (QueryException $e) {
            // Capturar la excepción y mostrar un mensaje de error
            return redirect()->back()->withErrors(['error' => 'Hubo un problema al tratar de descargar el archivo. Por favor, inténtelo de nuevo más tarde.']);
        }
    }
}
