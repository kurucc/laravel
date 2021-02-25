<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/jpg" href="{{ asset('icon/beer.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/soreim.css') }}">

    <title>{{ config('app.name') }}</title>
</head>
<body>
    <span class="fooldalspan"><a href="{{ url('/') }}">Főoldal</a></span>
    <fieldset id="sorok">
        <legend>Kész söreim</legend>
        <table id="tabla">
            <tr>              
                <th>Sorszám</th>
                <th>Típus</th>
                <th>Maláta</th>
                <th>Komló</th>
                <th>Élesztő</th>
                <th>Cukor</th>
                <th>Moszat</th>
                <th>Laktóz</th>
                <th>Megcsinált</th>
                <th>Mikor</th>
            </tr>
            @foreach($beersyes as $beeryes)
            <tr class="sortipusokrows kesz">
                
                <td class="sortipus sortipusok ">{{ $loop->index+1 }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['tipusok'] }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['malatak'] }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['komlok'] }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['elesztok'] }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['cukor'] }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['moszat'] }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['laktoz'] }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['megcsinalt'] }}</td>
                <td class="sortipus sortipusok ">{{ $beeryes['mikor'] }}</td>
            </tr>
            @endforeach
        </table>   
    </fieldset> <br>

    <fieldset id="sorok">
        <legend>Elkészítendő söreim</legend>
        <table id="tabla">
            <tr>              
                <th>Típus</th>
                <th>Maláta</th>
                <th>Komló</th>
                <th>Élesztő</th>
                <th>Cukor</th>
                <th>Moszat</th>
                <th>Laktóz</th>
                <th>Mikor</th>
            </tr>
            <form action="eddigi-sorok" method="POST">
            @csrf
            @foreach($beersno as $beerno)
            <tr class="sortipusokrows">
            
                <td class="sortipus sortipusok" hidden><input type="text" name="id[]" value="{{ $beerno['id'] }}"></td>
                <td class="sortipus sortipusok"><input type="text" name="elktipusok[]" value="{{ $beerno['tipusok'] }}" readonly></td>
                <td class="sortipus sortipusok"><input type="text" name="elkmalatak[]" value="{{ $beerno['malatak'] }}" readonly></td>
                <td class="sortipus sortipusok"><input type="text" name="elkkomlok[]" value="{{ $beerno['komlok'] }}" readonly></td>
                <td class="sortipus sortipusok"><input type="text" name="elkelesztok[]" value="{{ $beerno['elesztok'] }}" readonly></td>
                <td class="sortipus sortipusok"><input type="text" name="elkcukor[]" value="{{ $beerno['cukor'] }}" readonly></td>
                <td class="sortipus sortipusok"><input type="text" name="elkmoszat[]" value="{{ $beerno['moszat'] }}" readonly></td>
                <td class="sortipus sortipusok"><input type="text" name="elklaktoz[]" value="{{ $beerno['laktoz'] }}" readonly></td>
                <td class="sortipus sortipusok"> <input type="date" name="mikor[]"></td>
                
            </tr>
            @endforeach     
        </table>   
    </fieldset> <br>
    <input  id="mentes" type="submit" value="Mentés" name="submit" >
    </form>

</body>
</html>