<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {

            $url = env('API_URL');
            //$response = Http::get($url."auth/salir");
            $response = Http::timeout(60)->get($url."pacientes");

            if ($response->successful()) {

                $datos = $response['datos'];

                return view('paciente.index',compact('datos'));
            }else{
                return "Algo sucedió con la api (Se imprimirá en logs): ". $response;
            }

        } catch (Exception $e) {

            return 'Excepción cliente http: ' . $e->getMessage();
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {

            $url = env('API_URL');

            $response = Http::timeout(60)->post($url."pacientes",[
                'nombre' => $request->nombre,
                'edad' => $request->edad,
                'genero' => $request->genero,
                'fecha_ingreso' => $request->fecha_ingreso,
            ]);

            //
            if ($response->successful()) {
                return redirect()->route('pacientes.index');
            }else{
                return "Algo sucedió con la api (Se imprimirá en logs): ".$response;
            }

        } catch (Exception $e) {

            return 'Excepción cliente http: ' . $e->getMessage();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try {

            $url = env('API_URL');
            //$response = Http::get($url."auth/salir");
            $response = Http::timeout(60)->get($url."pacientes/".$id);

            if ($response->successful()) {

                $data = json_decode($response, true);
                return view('paciente.edit', compact('data'));
            }else{
                return "Algo sucedió con la api (Se imprimirá en logs): ".$response;
            }

        } catch (Exception $e) {

            return 'Excepción cliente http: ' . $e->getMessage();
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return $request;
        try {

            $url = env('API_URL');

            $response = Http::timeout(60)->put($url."pacientes/".$id,[
                'nombre' => $request->nombre,
                'edad' => $request->edad,
                'genero' => $request->genero,
                'fecha_ingreso' => $request->fecha_ingreso,
            ]);

            //
            if ($response->successful()) {
                return redirect()->route('pacientes.index');
            }else{
                return "Algo sucedió con la api (Se imprimirá en logs): ".$response;
            }

        } catch (Exception $e) {

            return 'Excepción cliente http: ' . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {

            $url = env('API_URL');
            //$response = Http::get($url."auth/salir");
            $response = Http::timeout(60)->delete($url."pacientes/".$id);

            //return $response;
            //return view('paciente.index',compact('datos'));
            if ($response->successful()) {
                return redirect()->route('pacientes.index');
            }else{
                return "Algo sucedió con la api (Se imprimirá en logs): ".$response;
            }

        } catch (Exception $e) {

            return 'Excepción cliente http: ' . $e->getMessage();
        }
    }
}
