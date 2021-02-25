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
        <legend>Élesztők</legend>
        <table id="tabla">
            <tr>
                <th>Típus</th>
                <th>Leírás</th>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Ale</td>
                <td class="sortipusok"><i>Magas alkohol tűrő törzs, ami száraz sört eredményez, enyhén savanykás befejezéssel. Míg a gyümölcsös karakterek intenzívek, ez a törzs a fűszeres fenolok termelésében visszafogott. Mivel akár 15%-ig tolerálja az alkoholt szinte minden belga sörhöz ideális választás.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Lager</td>
                <td class="sortipusok"><i>Egy különleges láger élesztő törzs, amely képes szoba hőmérsékleten erjeszteni anélkül, hogy eltűnnének a jellegzetes ízek. A hosszas lágerezés sem szükséges.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Lambic</td>
                <td class="sortipusok"><i>Olyan élesztőt és baktériumot tartalmazó keverék, mely elengedhetetlen a spontán erjedésű sörökhöz a Lambic régióban.</i></td>
            </tr>
        </table>   
    </fieldset> <br>
</body>
</html>