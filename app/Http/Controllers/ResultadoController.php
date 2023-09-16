<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResultadoController extends Controller
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
            $response = Http::timeout(60)->get($url."resultados");
            $response2 = Http::timeout(60)->get($url."pacientes");
            $response3 = Http::timeout(60)->get($url."p-medicas");

            if ($response->successful() && $response2->successful() && $response3->successful()) {

                $datos = $response['datos'];
                $datos2 = $response2['datos'];
                $datos3 = $response3['datos'];

                return view('resultado.index',compact('datos','datos2','datos3'));
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

            $response = Http::timeout(60)->post($url."resultados/",[
                'id_paciente' => $request->id_paciente,
                'id_prueba' => $request->id_prueba,
                'fecha_resultado' => $request->fecha_resultado,
                'resultado' => $request->resultado,
            ]);

            //
            if ($response->successful()) {
                return redirect()->route('resultados.index');
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
            $response = Http::timeout(60)->get($url."resultados/".$id);

            $response2 = Http::timeout(60)->get($url."pacientes");
            $response3 = Http::timeout(60)->get($url."p-medicas");

            if ($response->successful() && $response2->successful() && $response3->successful()) {

                $data = json_decode($response, true);
                $datos2 = $response2['datos'];
                $datos3 = $response3['datos'];

                return view('resultado.edit', compact('data','datos2','datos3'));
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

            $response = Http::timeout(60)->put($url."resultados/".$id,[
                'id_paciente' => $request->id_paciente,
                'id_prueba' => $request->id_prueba,
                'fecha_resultado' => $request->fecha_resultado,
                'resultado' => $request->resultado,
            ]);

            //
            if ($response->successful()) {
                return redirect()->route('resultados.index');
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
            $response = Http::timeout(60)->delete($url."resultados/".$id);

            //return $response;
            //return view('paciente.index',compact('datos'));
            if ($response->successful()) {
                return redirect()->route('resultados.index');
            }else{
                return "Algo sucedió con la api (Se imprimirá en logs): ".$response;
            }

        } catch (Exception $e) {

            return 'Excepción cliente http: ' . $e->getMessage();
        }
    }
}
