@extends('adminlte::page')

@section('title', 'Crear vacante')

@section('content_header')
<h1>Crear vancante</h1>
@stop

@section('content')

@section('title', 'Crear vacante')

@section('content_header')
<h1>Crear vancante</h1>
@stop


@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<form action="{{url('/recruiter')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="md:flex flex justify-center mb-6">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Informacion de la vacante
            </h3><br>
            <div>
                <label class="block text-gray-800 font-bold md:text-left mb-1 md:mb-0 pr-4" for="title">
                    Titulo
                </label>
                <input type="text"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-64 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="inline-full-name" type="text" value="Titulo de la vacante" name="title" />
            </div><br>
            <div>
                <label class="block text-gray-700 font-bold md:text-left mb-1 md:mb-0 pr-4" for="experinceRequired">
                    Experiencia
                </label><br>
                <input type="text"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-72 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    id="inline-full-name" type="text" value="Experiencia para el cargo" name="experinceRequired" />
            </div>
            <br>
            <div>
                <label class="block text-gray-700 font-bold md:text-left mb-1 md:mb-0 pr-4" for="salary">
                    Salario
                </label><br>
                <input type="text"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-72 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    id="inline-full-name" type="text" value="Pago Mensual $" name="salary" />
            </div>
            <br>
            <div>
                <label class="block text-gray-700 font-bold md:text-left mb-1 md:mb-0 pr-4" for="location">
                    Ciudad
                </label><br>
                <input type="text"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-72 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    id="inline-full-name" type="text" value="Cuidad" name="location" />
            </div>
            <br>
            <div>
                <label class="block text-gray-700 font-bold md:text-left mb-1 md:mb-0 pr-4" for="currency">
                    Currency
                </label><br>
                <input type="text"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-72 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    id="inline-full-name" type="text" value="Currency" name="currency" />
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <label class="text-gray-600 font-light" for="descriptionVacancy">Descripción</label>
                <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                    name="descriptionVacancy"></textarea>
            </div>
            <br>
            <div class="grid grid-cols-3 gap-4 mb-10 pb-5">
                <label class=" block text-gray-700 font-bold md:text-left mb-1 md:mb-0 pr-4" for="state">
                    Estado
                </label>
                <select name="state" class="form-checkbox rounded text-blue-500">
                    <option value="value1">Activa</option>
                    <option value="value2" selected>No disponible</option>
                </select>
                <br>

                <label class="bg-gray-50 text-gray-700 ">
                    Cierre de la Vacante
                </label>
                <input name="endDate" type="date" min="2018-03-25" max="2018-05-25" step="2"
                    class="form-checkbox rounded text-blue-500" value="2021-07-22" />

                <br>


                <label class="block text-gray-700 font-bold md:text-left mb-1 md:mb-0 pr-4" for="idCategoryVacancyFK">
                    Categoria
                </label>
                <select name="idCategoryVacancyFK" class="form-checkbox rounded text-blue-500">
                    <option value="value1">Activa</option>
                    <option value="value2" selected>No disponible</option>
                </select>
            </div>

            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-red-500 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit" value="Enviar">
                        Crear
                    </button>
                </div>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop