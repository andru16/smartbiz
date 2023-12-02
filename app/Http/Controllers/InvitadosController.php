<?php

namespace App\Http\Controllers;

use App\Models\Invitado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\In;
use Yajra\DataTables\Facades\DataTables;

class InvitadosController extends Controller
{
    public function vistaInvitados()
    {
        return view('invitados.invitados');
    }
    public function listaInvitados(Request $request) {

        $invitados = Invitado::query();

        return DataTables::eloquent($invitados)
            ->addColumn('nombre', function (Invitado $invitado) {
                return $invitado->obtenerNombreCompleto();
            })
            ->addColumn('estado', function (Invitado $invitado) {
                $estado=[];

                if ($invitado->estado == 0) {
                    $estado = [
                        'color_badge' => 'badge-light-danger',
                        'nombre' => 'Pendiente'
                    ];
                }
                if ($invitado->estado == 1){
                    $estado = [
                        'color_badge' => 'badge-light-primary',
                        'nombre' => 'Ingresó'
                    ];
                }
                return $estado;
            })
            ->addColumn('acompañantes', function (Invitado $invitado) {
                return $invitado->acompañantes;
            })
            ->setRowId(function (Invitado $invitado) {
                return $invitado->id;
            })

            ->filter( function($query) {

                $buscar = request('buscar');

                if( !empty($buscar) ) {

                    $query->where('nombres', 'like', "%" . $buscar . "%")
                        ->orWhere('apellidos', 'like', "%" . $buscar . "%");

                }


            })
            ->order( function( $query ) {
                $query->orderBy('nombres', 'desc');
            })
            ->toJson();

    }
}
