<x-slot name="header">
    <h1 class="text-gray-900">CRUD de Estudiantes</h1>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <div>
            <button wire:click="crear()" class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4">Nuevo</button><br><br>
            @if($modal)
                @include('livewire.crear')   
            @endif
        </div>
        
        
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Apellido</th>
                    <th class="px-4 py-2">Correo</th>
                    <th class="px-4 py-2">Carrera</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                <tr>
                    <td class="border px-4 py-2">{{ $estudiante->id }}</td>
                    <td class="border px-4 py-2">{{ $estudiante->nombre }}</td>
                    <td class="border px-4 py-2">{{ $estudiante->apellido }}</td>
                    <td class="border px-4 py-2">{{ $estudiante->correo }}</td>
                    <td class="border px-4 py-2">{{ $estudiante->carrera }}</td>
                    <td class="border px-4 py-2 text-center">
                        <button wire:click="editar({{$estudiante->id}})" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4">Editar</button>
                        <button wire:click="borrar({{$estudiante->id}})" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4">Borrar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>



<table class="table-fixed w-full">
        
