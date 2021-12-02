<?php
namespace App\Http\Livewire\Usuarios;

class rules
{
    public static function rulesUsuario(){
        return [
            'usuario.nombre_usuario'=> 'required',
            'usuario.email'=> 'required|email',
            'usuario.password'=>'required',
            'foto'=>'nullable|image'
            ];
    }

}
