<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('materialize/css/materiaize.css') }}">
</head>
<body>
    <h2>Paises</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Población</th>
                <th>Ciudades</th>
            </tr>
        </thead>  
        <tbody>
        @foreach($paises as $pais => $infopais)
        <tr>
            <td rowspan ='{{ count($infopais["ciudades"]) }}' class="text-primary"><b>{{ $pais }}</b></td>
            <td rowspan ='{{ count($infopais["ciudades"]) }}' class="text-danger"><b>{{ $infopais ["cap"]}}</b></td>
            <td rowspan ='{{ count($infopais["ciudades"]) }}'>{{ $infopais ["mon"]}}</td>
            <td rowspan ='{{ count($infopais["ciudades"]) }}'>{{ $infopais ["pob"]}} millones de hab.</td>
            @foreach($infopais["ciudades"] as $ciudad)
                <td  class="table-info"> {{ $ciudad }}</td>
            </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>