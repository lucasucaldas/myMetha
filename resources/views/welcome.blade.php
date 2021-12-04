<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>My Metha</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    @include('layouts.app')

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Crear Post
    </button>


    @include('post.create')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
