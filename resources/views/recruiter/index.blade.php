@section('title', 'Crear vacante')

@section('content_header')
<h1>Crear vancante</h1>
@stop

@section('content')

@section('title', 'Crear vacante')

@section('content_header')
<h1>Crear vancante</h1>
@stop
<table class="table-auto">
    <thead>
        <tr>
            <td>ID</td>
            <td>title</td>
            <td>Experiecia</td>
            <td>Salario</td>
            <td>Locacion</td>
            <td>Currency</td>
            <td>Descripcion</td>
            <td>Stado</td>
            <td>EndDate</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($vacancies as $vacancie)
        <tr>
            <td>Editar | Eliminar</td>
            <td>{{$vacancie->id}}</td>
            <td>ID</td>
            <td>{{$vacancie->title}}</td>
            <td>{{$vacancie->experinceRequired}}</td>
            <td>{{$vacancie->salary}}</td>
            <td>{{$vacancie->location}}</td>
            <td>{{$vacancie->currency}}</td>
            <td>{{$vacancie->descriptionVacancy}}</td>
            <td>{{$vacancie->state}}</td>
            <td>{{$vacancie->EndDate}}</td>
        </tr>
        @endforeach

    </tbody>
</table>


@section('content')


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