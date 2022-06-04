<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class Estudiantes extends Component
{
    public $estudiantes, $nombre,$apellido,$correo,$carrera;
    public $modal = 0;
    public function render()
    {   
        $this->estudiantes = Estudiante::all();
        return view('livewire.estudiantes');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();    
    }

    public function abrirModal() {
        $this->modal = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->nombre = '';
        $this->apellido = '';
        $this->correo = '';
        $this->carrera = '';
    }
    public function editar($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $this->id = $id;
        $this->nombre = $estudiante->nombre;    
        $this->nombre = $estudiante->nombre;
        $this->apellido = $estudiante->apellido;
        $this->correo = $estudiante->correo;
        $this->carrera = $estudiante->carrera;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Estudiante::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        Estudiante::updateOrCreate(['id'=>$this->id],
            [
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'correo' => $this->correo,
                'carrera' => $this->carrera
            ]);
         
         session()->flash('message',
            $this->id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
