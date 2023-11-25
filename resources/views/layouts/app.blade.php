<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <header class="flex justify-between bg-slate-500 py-3 px-6 h-16 shadow-sm z-10 shadow-black">
        <div class="flex gap-2 items-center">
            <a href="{{ route('home') }}" class="flex gap-2 items-center"> <img
                    src="https://s3-eu-west-1.amazonaws.com/tpd/logos/5be01d787b5e5b0001ebb6bb/0x0.png" class="w-10"
                    alt=""> <span class="font-semibold text-white">LOGO</span></a>
        </div>
        <nav class="flex items-center gap-8 h-full">
            <ul class="flex  text-white ">
                <li class="h-full flex items-center">
                    <a class="px-3 py-2 hover:bg-slate-600 rounded-lg" href="categories">
                        Categorias
                    </a>
                </li>
                <li class="h-full flex items-center">
                    <a class="px-3 py-2 hover:bg-slate-600 rounded-lg" href="products">
                        Productos
                    </a>
                </li>
                <li class="h-full flex items-center">
                    <a class="px-3 py-2 hover:bg-slate-600 rounded-lg" href="users">
                        Usuarios
                    </a>
                </li>
                <li class="h-full flex items-center">
                    <a class="px-3 py-2 hover:bg-slate-600 rounded-lg" href="sales">
                        Ventas
                    </a>
                </li>
                <li class="h-full flex items-center">
                    <a class="px-3 py-2 hover:bg-slate-600 rounded-lg" href="sales-detail">
                        Detalles de ventas
                    </a>
                </li>
            </ul>
            <button class="bg-red-800 rounded-lg p-2 text-white font-semibold">
                Cerrar Sesion
            </button>
        </nav>
    </header>
    <main class="min-h-[calc(100vh-64px)] grid grid-cols-12">
        <nav class="col-span-2 border-r-2 px-4 py-4 border-slate-300">
            <h1 class="text-2xl font-semibold border-b-2 pb-2">Tablas</h1>
            <ul class="pt-2">
                <li class="h-10 ">
                    <a href="products"
                        class="flex hover:bg-slate-200 rounded-lg h-full w-full items-center px-3">Productos</a>
                </li>
                <li class="h-10  ">
                    <a href="categories"
                        class="flex hover:bg-slate-200 rounded-lg h-full w-full items-center px-3">Categorias</a>
                </li>
                <li class="h-10  ">
                    <a href="users"
                        class="flex hover:bg-slate-200 rounded-lg h-full w-full items-center px-3">Usuarios</a>
                </li>
                <li class="h-10  ">
                    <a href="sales"
                        class="flex hover:bg-slate-200 rounded-lg h-full w-full items-center px-3">Ventas</a>
                </li>
                <li class="h-10 ">
                    <a href="sales_detail"
                        class="flex hover:bg-slate-200 rounded-lg h-full w-full items-center px-3">Detalles de
                        ventas</a>
                </li>
            </ul>
        </nav>
        <section class="col-span-10">
            @yield('content')
        </section>

    </main>

</body>

</html>
