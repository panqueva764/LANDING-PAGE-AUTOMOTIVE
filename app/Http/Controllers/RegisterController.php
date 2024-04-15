<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'last_name' => 'required|string',
            'identification' => 'required|integer',
            'department' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|integer',
            'email' => 'required|string',
            'accept_terms' => 'required|boolean',
        ]);

        $errors = $validator->errors();

        if ($errors->any()) {
            foreach ($errors->all() as $error) {
                echo $error;
            }
        }

        try {
            // Crear un nuevo cliente con los datos del formulario
            $cliente = new Client();
            $cliente->name = $request->input('name');
            $cliente->last_name = $request->input('last_name');
            $cliente->identification = $request->input('identification');
            $cliente->department = $request->input('department');
            $cliente->city = $request->input('city');
            $cliente->phone = $request->input('phone');
            $cliente->email = $request->input('email');
            $cliente->accept_terms = $request->has('accept_terms');
            $cliente->is_winner = false; // Establecer is_winner como false por defecto
            $cliente->save();

            return redirect()->route('register.submit')->with('success', '¡Registro exitoso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al registrar: ' . $e->getMessage());
        }
    }

    public function showRegistrationForm()
    {
        return view('register');
    }
}
