<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DatosuserController extends Controller
{

    // public function show($id)
    // {
    //     $datos =Datosuser::find($id);
        
    //     return view('datosuser.show')->with('datos', $datos);
    // }

    public function index()
    {
        $datos=User::where('user_id', auth()->user()->id)->get();
        return view('datosuser.index')->with('datos', $datos);
    }

    // public function dashboard()
    // {
    //     $datos=Datosuser::all();
    //     return view('datos.index')->with('datos',  $datos);
    // }


    public function create()
    {
        return view('datosuser.create');
    }

    public function store(Request $request)
    {
        $datos=new Datosuser();
        $datos->user_id=auth()->id();
        $datos->fechanacimiento=$request->get('fechanacimiento');
        $datos->pais=$request->get('pais');
        $datos->save();

        return back()->with('status', 'Datos Guardados exitosamente :)');;
    }

    public function edit($id)
    {
        $datos=Datosuser::find($id);
        return view('datosuser.edit')->with('datos',  $datos);
       
    }

    public function update(Request $request, $id)
    {
        $datos= Datosuser::find($id);
        $datos->fechanacimiento= $request->get('fechanacimiento');
        $datos->pais= $request->get('pais');
        $datos->save();

        return redirect('/datosuser');
    }


    public function destroy($id)
    {
        $datos= Datosuser::find($id);
        $datos->delete();
        return redirect('/datosuser');

    }

}
