<div>
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <x-application-logo class="block h-12 w-auto" />

        <h1 class="mt-8 text-2xl font-medium text-gray-900">
            Crear y completa tus tareas!
        </h1>

    </div>
    <div class="w-full  p-4  bg-white border border-gray-100 rounded-lg shadow sm:p-8">
       <div class="flow-root">
           @foreach ($tasks as $task)
               <div class="border-2 border-black px-5 py-4 rounded-2xl bg-green-100 mb-8">
                   <div class="flex justify-between">
                       <div class="text-gray-600">Fecha de creación: {{ $task->created_at }}</div>
                       <div class="text-gray-600">
                           <button wire:click="showModalConfirmation({{ $task->id }})"
                               class="icon hover:text-red-500">
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
                       <div class="font-semibold text-lg">{{ $task->name }}</div>
                   </div>
                   <div class=" text-gray-600">
                       <p>{{ $task->description }}</p>
                   </div>
               </div>
           @endforeach
       </div>
    </div>



</div>
