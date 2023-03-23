
<!DOCTYPE html>
<html lang="es-MX">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <title><?= $page_title; ?></title> -->
<title><?php echo e($page_title); ?></title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body>
    

<h1><?php echo e($page_title); ?></h1>
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
                <td><?php echo e($pokemon->id); ?></td>
                <td><?php echo e($pokemon->name); ?></td>
                <td><?php echo e($pokemon->height); ?></td>
                <td><?php echo e($pokemon->weight); ?></td>
                <td><?php echo e($pokemon->hp); ?></td>
            </tr>

       
    </tbody>
</table>

<br><br><br>

<a href="<?php echo e(route('welcome')); ?>">Ir al inicio</a> <br>


</body>
</html><?php /**PATH C:\xampp\htdocs\Diego_Exam2\resources\views/Allpoke.blade.php ENDPATH**/ ?>