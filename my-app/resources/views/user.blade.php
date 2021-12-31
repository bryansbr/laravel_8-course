<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Está es la página de usuarios</h1>  
    <!--
    <ul>
        <li>Elon Musk</li>
        <li>Jeff Bezos</li>
        <li>Mark Zuckerberg</li>
        <li>Bill Gates</li>
        <li>Steve Jobs</li>
    </ul>
    -->
    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach
</body>
</html>