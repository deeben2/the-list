<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Title in brower top menu-bar --}}
    <title>Steven's List</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="prose">
        {{-- Website title --}}
        <h1>Steven's List</h1>

        {{-- Subtitle --}}
        <p>Updated on Sat. Apr. 27 24</p>

        {{-- Top X List --}}
        <h4>Top 3</h4>
        <ol>
            <li>La Tentacion</li>
            <li>Golden Palace</li>
            <li>Press Pizza</li>
        </ol>

        {{-- Locations list --}}
        <h4>All locations considered:</h4>
        <ul>
            <li>
                Press Pizza

                {{-- Can also pass in a "max" value --}}
                <x-rating of="3" />
            </li>
            <li>Leon's Pizza</li>
            <li>Ed's Deli</li>
            <li>Chef Flames</li>
            <li>La Tentacion</li>
            <li>Golden Palace</li>
            <li>Gyro Crown Chicken</li>
        </ul>
    </div>

</body>

</html>
