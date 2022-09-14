<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list(){
        return "Metodo para listar usuarios!!";
    }

    public function save(Request $request){
        return "Metodo para crear usuarios";
    }

    public function saveMass(Request $request){
        return "Agregar usuarios de forma masiva";
    }

    public function find(Request $request){
        return "Agregar usuarios de forma masiva";
    }

    public function autocomplete(Request $request){
        return "Metodo para auctompletar por nick, RFC, o nombre de usuario";
    }

    public function update(Request $request){
        return "Metodo para actualizar una fila";
    }

    public function sync(Request $request){
        return "Metodo para sincronizar los usuarios";
    }
}
