<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.5/tailwind.min.css">

</head>

@php
$color = 'red';
$alert = 'alert';
@endphp

<body>
    <div class="container mx-auto">
        <x-alert :color="$color" class="mb-4">

            <x-slot name="title">
                Titulo 1
            </x-slot>

            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur vero dolore qui facere facilis quisquam
            repudiandae dolor? Illo, animi modi!
        </x-alert>

        <x-alert2 color="blue" class="mb-4">
            <x-slot name="title">
                Titulo
            </x-slot>

            Lorem ipsum dolor sit amet.
        </x-alert2>

        <x-dynamic-component :component="$alert">
            <x-slot name="title">
                Titulo
            </x-slot>

            Lorem ipsum dolor sit amet.

        </x-dynamic-component>

    </div>
</body>



</html>
