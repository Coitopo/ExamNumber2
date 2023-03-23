
<!DOCTYPE html>
<html lang="es-MX">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <title><?= $page_title; ?></title> -->
<title>{{$page_title}}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body>
    

<h1>{{ $page_title }}</h1>
<br>

<table>
    <thead>
        <tr>
        <th>ID</th>
            <th>Name</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Hp</th>
            <th>Image</th>
        </tr>
    </thead>

    <tbody>
        

            <tr>
                <td>{{ $pokemon->id }}</td>
                <td>{{ $pokemon->name }}</td>
                <td>{{ $pokemon->height }}</td>
                <td>{{ $pokemon->weight }}</td>
                <td>{{ $pokemon->hp }}</td>
            </tr>

       
    </tbody>
</table>

<br><br><br>

<a href="{{ route('welcome') }}">Ir al inicio</a> <br>


</body>
</html>