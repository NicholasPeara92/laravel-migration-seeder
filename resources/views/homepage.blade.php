<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <h1>TRENI</h1>
            @foreach ($trains as $train)
                <ul>
                    <li>
                        Compagnia: {{ $train->company }}

                    </li>
                    <li>
                        Stazione di partenza: {{ $train->departure_station }}

                    </li>
                    <li>
                        Stazione d'arrivo: {{ $train->arrival_station }}

                    </li>
                    <li>
                        Data di partenza: {{ $train->departure_time }}

                    </li>
                    <li>
                        Data d'arrivo: {{ $train->arrival_time }}

                    </li>
                    <li>
                        Codice treno: {{ $train->train_code }}

                    </li>
                    <li>
                        Numero carrozza: {{ $train->carriages_num }}

                    </li>
                </ul>
            @endforeach
        </div>
    </main>

</body>

</html>
