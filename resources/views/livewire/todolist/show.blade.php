<div >
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <x-application-logo class="block h-12 w-auto" />

        <h1 class="mt-8 text-2xl font-medium text-gray-900">
            Crear y completa tus tareas!
        </h1>

    </div>
    <div class="w-full  p-4  bg-white border border-gray-100 rounded-lg shadow sm:p-8">
        <div
            class="w-full  p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Listado de Tareas</h5>
                <div class="flex justify-between mb-8">
                    <button wire:click="showCreateModal"
                        class="border-2 border-black rounded-xl px-5 font-semibold bg-red-300 hover:bg-gray-700 hover:text-white dark:text-white">
                        <span>+</span>
                        <span>Crear</span>
                    </button>
                </div>
            </div>
            <div class="flow-root">
                @foreach ($tasks as $task)
                    <div class="border-2 border-black px-5 py-4 rounded-2xl bg-green-100 mb-8">
                        <div class="flex justify-between">
                            <div class="text-gray-600">Fecha de creación: {{ $task->created_at }}</div>
                            <div class="text-gray-600">
                                <button wire:click="showDeleteModalConfirmation({{$task->id}})" class="icon hover:text-red-500">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </i>
                                </button>
                            </div>
                        </div>
                        <div class="flex space-x-2 items-center mb-5">
                            <input id="checkbox-{{ $task->id }}" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-white-100 border-white-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-white-800 focus:ring-2 dark:bg-white-700 dark:border-white-600">
                            <div class="font-semibold text-lg">{{ $task->title }}</div>
                        </div>
                        <div class=" text-gray-600">
                            <p>{{ $task->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>


    <x-modal id="taskModal" maxWidth="lg" wire:model="showCreateModal">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Formulario de tareas
                    </h3>
                    <button x-on:click="show = false" type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <form id="taskForm" wire:submit.prevent="addTask" class="max-w-sm mx-auto">
                        <div class="mb-5">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                            <input id="title" type="text" wire:model="title" id="task-title"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('title') <span class="text-red-200 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-5">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                            <textarea id="description" wire:model="description"  id="task-description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Descripción de la tarea..."></textarea>
                                @error('description') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button form="taskForm" type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear
                        tarea</button>
                </div>
            </div>
        </div>
    </x-modal>


    <x-confirmation-modal id="taskDeleteConfirmation" maxWidth="sm" wire:model="showDeleteModalConfirmation">
        <x-slot name="title">
            ¿Estás seguro?
        </x-slot>
        <x-slot name="content">
            ¿Estás seguro de que quieres eliminar esta tarea?
        </x-slot>
        <x-slot name="footer">
            <x-button x-on:click="show = false">Cancelar</x-button>
            <x-button class="ml-2" wire:click="deleteTask">Eliminar</x-button>
        </x-slot>
    </x-confirmation-modal>
</div>
