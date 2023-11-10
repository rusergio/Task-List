<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo List</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/resources/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="http://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>
<body  class="bg-gray-200 p-4">
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-white rounded-xl">
        <h1 class="font-bold text-5xl text-center mb-8">Lista de Tarea</h1>

        <li class="flex py-4 first:pt-0 last:pb-0 mb-3">
            {{-- <img class="h-10 w-10 rounded-full" src="/resources/img/perfil-foto.jpg" alt="" /> --}}
            <div class="ml-3 overflow-hidden">
                <p class="text-sm font-medium text-slate-900 font-bold">Rui Sergio Cabral Moreno Mané</p>
                <p class="text-sm text-slate-500 truncate text-gray-500">rsergio10@gmail.com</p>
            </div>
        </li>

        <div class="mb-6">
            <form class="flex flex-col space-y-4 " method="POST" action="/">

                <div class="">

                    <div>
                        <button class="py-2 px-2 bg-green-500 hover:bg-green-600 text-white rounded-md font-bold shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button>
                    </div>

                    <div>
                        <input type="text" name="title" placeholder="Agregar una tarea..." class="py-2 px-2 bg-gray-100 rounded shadow ">
                    </div>

                </div>

                <div class="mt-2">
                        {{-- Parte 1 --}}
                        <div class="py-3 flex items-center bg-gray-200 px-3 mb-2 rounded shadow">

                            <div class="flex-1 pr-8">

                                <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 transition duration-500 ease-in-out checked:bg-blue-500">
                                <input type="text" name="title" value=" Hacer tarea de Web" size="50" class="text-black bg-gray-200">
                            </div>

                            <div class="flex space-x-3">

                                <button class="py-1 px-1 bg-gray-500 hover:bg-gray-600 text-white rounded-full ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>

                            </div>

                        </div>
                        {{-- Parte 2 --}}
                        {{-- <div class="py-3 flex items-center px-3 bg-red-200 rounded">

                            <div class="flex-1 pr-8">

                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 transition duration-500 ease-in-out checked:bg-blue-500">
                                <input type="text" name="title" value=" Hacer tarea de Investigacion de Operaciones " size="50" class="text-gray-600 line-through ml-2 bg-red-200 ">

                            </div>

                            <div class="flex space-x-3">

                                <button class="py-1 px-1 bg-gray-500 hover:bg-red-600 text-white rounded-full shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>

                            </div>

                        </div> --}}
                </div>
            </form>

        </div>
    </div>
</body>
</html>
