<div class="p-4">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Crea o edita datos de los docentes
        </h2>
    </x-slot>
    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-jet-form-section submit="actualizar">
                <x-slot name="title">
                    Datos generales
                </x-slot>

                <x-slot name="description">
                    Crear / actualiza los datos de los docentes
                </x-slot>

                <x-slot name="form">

                    <!-- Nombre -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="nombre" value="Nombre"/>
                        <x-jet-input id="nombre" type="text" class="block w-full mt-1"
                                     wire:model.defer="universidad.nombre"/>
                        <x-jet-input-error for="universidad.nombre" class="mt-2"/>
                    </div>

                    <!-- Dirección -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="direccion" value="Dirección"/>
                        <x-jet-input id="direccion" type="text" class="block w-full mt-1"
                                     wire:model.defer="universidad.direccion"/>
                        <x-jet-input-error for="universidad.direccion" class="mt-2"/>
                    </div>

                    <!-- Teléfono -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="telefono" value="Teléfono"/>
                        <x-jet-input id="telefono" type="text" class="block w-full mt-1"
                                     wire:model.defer="universidad.telefono"/>
                        <x-jet-input-error for="universidad.telefono" class="mt-2"/>
                    </div>

                    <!-- Email -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="email" value="Email"/>
                        <x-jet-input id="email" type="email" class="block w-full mt-1"
                                     wire:model.defer="universidad.email"/>
                        <x-jet-input-error for="universidad.email" class="mt-2"/>
                    </div>
                    <!-- carrera -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="carrera" value="Carrera"/>
                        <x-jet-input id="carrera" type="text" class="block w-full mt-1"
                                     wire:model.defer="universidad.carrera"/>
                        <x-jet-input-error for="universidad.carrera" class="mt-2"/>
                    </div>
                    <!-- fecha -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="fecha" value="Fecha"/>
                        <x-jet-input id="fecha" type="date" class="block w-full mt-1"
                                     wire:model.defer="universidad.fecha"/>
                        <x-jet-input-error for="universidad.fecha" class="mt-2"/>
                    </div>
                    <!-- asistencia -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="asistencia" value="Asistencia"/>
                    <x-jet-input id="asistencia" type="text" class="block w-full mt-1"
                                     wire:model.defer="universidad.asistencia"/>
                                     
                        <x-jet-input-error for="universidad.asistencia" class="mt-2"/>
                    </div>
                    



                </x-slot>

                <x-slot name="actions">
                    <x-jet-action-message class="mr-3" on="saved">
                        Datos registrados
                    </x-jet-action-message>

                    <x-jet-button wire:loading.attr="disabled">
                        Guardar
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>
        </div>
    </div>

</div>
