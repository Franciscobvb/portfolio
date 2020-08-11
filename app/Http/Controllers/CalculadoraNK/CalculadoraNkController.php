<?php

namespace App\Http\Controllers\CalculadoraNK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CalculadoraNkController extends Controller{
    public function calculadoraNikken(Request $request){
        return view('calculadora.index');
    }

    public function calcGetProducts(Request $request){
        $familias = ['kenko_light' => 'KENKO LIGHT', 'kenko_air' => 'KENKO AIR', 'pimag' => 'PiMag', 'kenzen' => 'KENZEN', 'kenko_sleep' => 'KENKO SLEEP'];
        $producto = $familias[$request->familyProd];
        $conexion=DB::connection('sqlsrv2');
            $product = $conexion->select("SELECT 'Producto NIKKEN $producto 1' AS producto, 2021 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 2' AS producto, 2022 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 3' AS producto, 2023 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 4' AS producto, 2024 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 5' AS producto, 2025 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 6' AS producto, 2026 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 7' AS producto, 2027 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 8' AS producto, 2028 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 9' AS producto, 2029 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 10' AS producto, 20210 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 11' AS producto, 20211 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 12' AS producto, 20212 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 13' AS producto, 20213 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 14' AS producto, 20214 AS 'codigo'
                                          UNION SELECT 'Producto NIKKEN $producto 15' AS producto, 20215 AS 'codigo'
                                          ORDER BY codigo asc
            ");
        DB::disconnect('sqlsrv2');
        $data = [
            'data' => $product,
        ];
        return $data;
    }

    public function calcGetBonos(Request $request){
        return $request;
    }
}
