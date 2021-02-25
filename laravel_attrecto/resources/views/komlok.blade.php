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
        <legend>Komlók</legend>
        <table id="tabla">
            <tr>
                <th>Típus</th>
                <th>Leírás</th>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Saaz</td>
                <td class="sortipusok"><i>A legnagyobb sörgyárak is nagy mennyiségben használják, mint például a Stella Artois és számtalan cseh sörfőzde, aki a Zatec-i komlóra esküszik. Nyersen fűszeres, fás aromái vannak, mint például a tárkony, levendula, cédrus és füstölt szalonna.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Hallertaui Perle</td>
                <td class="sortipusok"><i>Az eredeti Perle-t valamikor a 60-as években fejlesztették ki egy Northern Brewer anya és egy német hím komló keresztezéséből, de csak 1978-ban került piacra. A Perle-nek kellemes aromája van, menta és fenyő elemekkel és egy csipetnyi fűszerrel.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Magnum</td>
                <td class="sortipusok"><i>Különösebb aroma karaktere nincs, bár néhol megemlítenek némi alma és borsos karaktert, de legfőképp a tiszta és kiegyensúlyozott keserűsége miatt nagyon közkedvelt lett. Ma már európa legtöbbet használt keserű komlója.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Cascade</td>
                <td class="sortipusok"><i>Nagyon egyedi és csodálatos citrusos, fűszeres aromája van. Alapvetően aroma komlóként használják, de nem ritka, hogy önállóan egyetlen komlóként főznek vele sört.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Centennial</td>
                <td class="sortipusok"><i>Először 1990-ben mutatkozott be és gyakran hívják Super Cascade-nak, bár a citrus aromák a Centennial-ban kevésbé dominánsak. Közkedvelt fajta sokoldalúsága miatt. Keserűsége és aromái tökéletes harmóniában vannak.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Styrian Golding</td>
                <td class="sortipusok"><i>A Styrian Golding vagy más néven Savinjski Golding egy tradicionális szlovén aroma komló, amit eredetileg a Fuggle-ből tenyésztettek ki még a 19. század elején. Aromái talán kifinomultabbak mint a Fuggle-é és többek olyan karakterek egyesülnek benne, mint a zöld tea, citrus és gyógynövény.</i></td>
            </tr>
        </table>   
    </fieldset> <br>
</body>
</html>