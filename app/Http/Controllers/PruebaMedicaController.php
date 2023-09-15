<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PruebaMedicaController extends Controller
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
            $response = Http::timeout(60)->get($url."p-medicas");

            if ($response->successful()) {

                $datos = $response['datos'];

                return view('prueba-medica.index',compact('datos'));
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

            $response = Http::timeout(60)->post($url."p-medicas",[
                'nombre' => $request->nombre,
                'tipo' => $request->tipo,
                'costo' => $request->costo,
                'tiempo_resultado' => $request->tiempo_resultado,
            ]);

            //
            if ($response->successful()) {
                return redirect()->route('pruebas-medicas.index');
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
            $response = Http::timeout(60)->get($url."p-medicas/".$id);

            if ($response->successful()) {

                $data = json_decode($response, true);
                return view('prueba-medica.edit', compact('data'));
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

            $response = Http::timeout(60)->put($url."p-medicas/".$id,[
                'nombre' => $request->nombre,
                'tipo' => $request->tipo,
                'costo' => $request->costo,
                'tiempo_resultado' => $request->tiempo_resultado,
            ]);

            //
            if ($response->successful()) {
                return redirect()->route('pruebas-medicas.index');
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
            $response = Http::timeout(60)->delete($url."p-medicas/".$id);

            //return $response;
            //return view('paciente.index',compact('datos'));
            if ($response->successful()) {
                return redirect()->route('pruebas-medicas.index');
            }else{
                return "Algo sucedió con la api (Se imprimirá en logs): ".$response;
            }

        } catch (Exception $e) {

            return 'Excepción cliente http: ' . $e->getMessage();
        }
    }
}
