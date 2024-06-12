<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Servicio;

class ServiciosController extends Controller
{
    /** 
    *@param Request
    *@return Response
    */
    public function index()
    {
       ## $servicios=Servicio::get();
        $servicios=DB::table('servicios')->get();
            ##['titulo'=>'Mantenimiento'],
            ##['titulo'=>'Afinamiento'],
            ##['titulo'=>'Cambio de Aceite'],
            ##['titulo'=>'Lavado tipo salón'],
            ##['titulo'=>'Servicio 05'], 
            return view('servicios',compact('servicios'));
    }   
    public function show($id)
    {
        return view('show',[
            'servicio'=>Servicio::find($id)

        ]);
        
        
        ##return Servicio::find($id);
    }
}
