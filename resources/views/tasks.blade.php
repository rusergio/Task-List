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
                    <p class="text-sm text-slate-900 font-bold">Rui Sergio Cabral Moreno Mané</p>
                    <p class="text-sm text-slate-500 truncate text-gray-500">rsergio10@gmail.com</p>
                </div>
            </li>

        <div class="mb-6">

            <form action="/" method="POST">
                @csrf
                <div class="bg-gray-100 rounded-md border transition duration-300 focus-within:border-blue-500 ">
                    <div class="py-2 flex items-center ">
                        <button class="py-2 px-4 bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-current text-gray-500 hover:text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button>
                        <input type="text" name="title" placeholder="Agregar una tarea..." size="50" class="bg-gray-100 py-2 px-1 outline-none border-none w-full">
                    </div>
                </div>
            </form>

            <p class="ml-3 text-base font-medium mt-10 truncate text-gray-500">Lista de Tareas Pendientes</p>
            @foreach ($tasks as $task)
                <div class="bg-gray-100 rounded-md py-2 flex items-center mb-2">
                        <div class="py-2 flex items-center ">

                            <input type="checkbox" id="customCheckbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded focus:ring-indigo-500 ml-4 ">
                            <input type="text" value="{{ $task ->title }}" size="58" class="ml-1 bg-gray-100 outline-none px-1 flex">

                            <div class="flex space-x-3 ml-10">
                                <form method="POST" action="/{{ $task->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-200 px-1 py-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>
                            </div>

                        </div>
                </div>
            @endforeach
        </div>

        <div class=" flex items-center">

            <button id="toggleButton" class="py-1 flex items-center px-1 bg-gray-100 text-base rounded-full content-center" onclick="toggleCompletedTasks()">
                <span id="toggleText" class="ml-3 mr-1">Mostrar tareas completadas</span>
                <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                    <path id="arrowIcon" stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

        </div>

    </div>

    <script>

        // función mostrar y ocultar
        function toggleCompletedTasks() {
            var text = document.getElementById('toggleText');
            var icon = document.getElementById('toggleIcon');

            if (text.innerText === "Mostrar tareas completadas") {
                text.innerText = "Ocultar tareas completadas";
                icon.innerHTML = '<path id="arrowIcon" stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />';
            } else {
                text.innerText = "Mostrar tareas completadas";
                icon.innerHTML = '<path id="arrowIcon" stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />';
            }
        }


    </script>
</body>
</html>
