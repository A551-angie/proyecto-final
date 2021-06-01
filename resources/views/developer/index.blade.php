@extends('adminlte::page')

@section('title', 'ver vacantes')

@section('content_header')
<h1>vancantes</h1>
@stop

    @section('content')

        <a href=""></a>
        <ul>
            @foreach ($developers as $developer)
                <li>
                    {{$developer->experience}}
                </li>
                
            @endforeach
        </ul>

        {{-- paginacion de contenidos --}}

        {{$developers-> links()}}
        


    


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop
@section('js')
<script>
console.log('Hi!');
</script>



