<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="http://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-200 p-4">
        <div class="lg:w-2/4 mx-auto py-8 px-6 bg-white rounded-xl">
            <h1 class="font-bold text-5xl text-center mb-8">Laravel + Tailwind</h1>

            <li class="flex py-4 first:pt-0 last:pb-0">
                <img class="h-10 w-10 rounded-full" src="/resources/img/profile-pic(2).png" alt="" />
                <div class="ml-3 overflow-hidden">
                  <p class="text-sm font-medium text-slate-900 font-bold">Rui Sérgio Mané</p>
                  <p class="text-sm text-slate-500 text-gray-500 truncate">rui@gmail.com</p>
                </div>
            </li>

            <div class="mb-6">
                <form class="flex flex-col space-y-4 " method="POST" action="/">
                    @csrf

                    <input type="text" name="title" placeholder="Escribe la tarea" class="py-3 px-4 bg-gray-100 rounded-xl">
                    <textarea name="description" placeholder="Escribe la descripcion" class="py-3 px-4 bg-gray-100 rounded-xl"></textarea>

                    <button class="w-28 py-3 px-3 bg-green-500 hover:bg-green-600 text-white rounded-xl font-bold">Agregar</button>

                    <hr>

                    <div class="mt-2">

                        @foreach ( $tasks as $task )
                            <div class="py-4 flex items-center border-b border-gray-300 px-3">
                                <div class="flex-1 pr-8">
                                    <h3 class="text-lg font-semibold">{{ $task ->title }}</h3>
                                    <p class="text-gray-500">{{ $task ->description }}</p>
                                </div>

                                <div class="flex space-x-3">

                                    <button class=" py-2 px-2 bg-green-500 hover:bg-green-600 text-white rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <button class="py-2 px-2 bg-red-500 hover:bg-red-600 text-white rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
