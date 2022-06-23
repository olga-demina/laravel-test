<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}">Chi siamo</a>
            </li>
        </ul>
    </header>


    <h1>Ciao {{ $name }} {{ $lastname }}, sono pagina home </h1>

    {{-- Se l'utente è loggato, scrivo "Sei loggato"
altrimenti scrivo fai login --}}

    @if ($isLoggedIn)
        <p>Sei loggato</p>
    @else
        <p>Fai login</p>
    @endif

    {{-- Stampare la lista di studenti --}}
    <ul>
        @foreach ($students as $student)
            <li>{{ $student['name'] }} {{ $student['lastname'] }}
                {{-- Aggiungo solo se primo elemento --}}
                @if ($loop->first)
                    -> first element
                @endif
            </li>
        @endforeach
    </ul>

    {{-- Stampo la lista di studenti se gli studenti ci sono --}}
    {{-- altrimenti scrivo "Lista se è vuota" --}}
    <ul>
        @forelse ($students as $student)
            <li>{{ $student['name'] }} {{ $student['lastname'] }}
                {{-- Aggiungo solo se primo elemento --}}
                @if ($loop->first)
                    -> first element
                @endif
            </li>
        @empty
            <p>La lista è vuota</p>
        @endforelse
    </ul>

    <ul>
        @for ($i = 0; $i < 10; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>

</body>

</html>
