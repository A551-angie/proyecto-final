@extends('adminlte::page')

@section('title', 'tomar vacante')

@section('content_header')
<h1>tomar vancante</h1>
@stop

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            vacance Information
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Personal details and vacance.
        </p>
    </div>
   
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop