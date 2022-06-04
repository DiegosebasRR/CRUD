 <?php $__env->slot('header', null, []); ?> 
    <h1 class="text-gray-900">CRUD de Estudiantes</h1>
 <?php $__env->endSlot(); ?>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <div>
            <button wire:click="crear()" class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4">Nuevo</button><br><br>
            <?php if($modal): ?>
                <?php echo $__env->make('livewire.crear', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
            <?php endif; ?>
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
                <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="border px-4 py-2"><?php echo e($estudiante->id); ?></td>
                    <td class="border px-4 py-2"><?php echo e($estudiante->nombre); ?></td>
                    <td class="border px-4 py-2"><?php echo e($estudiante->apellido); ?></td>
                    <td class="border px-4 py-2"><?php echo e($estudiante->correo); ?></td>
                    <td class="border px-4 py-2"><?php echo e($estudiante->carrera); ?></td>
                    <td class="border px-4 py-2 text-center">
                        <button wire:click="editar(<?php echo e($estudiante->id); ?>)" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4">Editar</button>
                        <button wire:click="borrar(<?php echo e($estudiante->id); ?>)" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4">Borrar</button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </div>
</div>



<table class="table-fixed w-full">
        
<?php /**PATH C:\xampp\htdocs\2proyecto12\proyecto12\resources\views/livewire/estudiantes.blade.php ENDPATH**/ ?>