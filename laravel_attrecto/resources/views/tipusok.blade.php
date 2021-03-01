<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/jpg" href="{{ asset('icon/beer.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/tkme.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>{{ config('app.name') }}</title>

</head>
<body>
    <span hidden class="fooldalspan"><a href="{{ url('/') }}">Főoldal</a></span>
<div hidden>
    <fieldset id="sorok">
        <legend>Típusok</legend>
        <table id="tabla">
            <tr>
                <th>Típus</th>
                <th>Leírás</th>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">IPA</td>
                <td class="sortipusok"><i>Tradicionális brit sör, történetéről a neve árulkodik. India a Brit Birodalom koronagyarmata volt. Az ottaniaknak főzték ezt az ale-t, méghozzá úgy, hogy a hosszú tengeri szállítást, klí­maváltozást kibí­rja. Jellemzője a magas komlótartalom, a keserű í­z és a testesség. Szí­ne a mézaranytól a rozsdavörösig, bronzig terjed. </i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Tropical IPA</td>
                <td class="sortipusok"><i>Az IPA trópusi, citrusos jelleggel kitöltve.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">APA</td>
                <td class="sortipusok"><i>Felsőerjesztésű, hidegen komlózott, szűretlen sör. Két izgalmas komlót használunk a hidegkomlózás folyamán: a Chinook-ot és a Simcoe-t. mind a kettő amerikai aroma komló.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Stout</td>
                <td class="sortipusok"><i>A Porternél erősebb, friss ital, ízben a száraztól a bársonyoson, pörköltön keresztül egészen az édesig, krémesig, csokisig terjed.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Imperial Stout</td>
                <td class="sortipusok"><i>Erős angol Ale, alkoholfoka 6-8% közötti, szí­ne sötét, gyakran fekete. Íze pörkölt, alkohol, kávé és keserű csokoládé aromájával vegyí­tve.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Pale Ale</td>
                <td class="sortipusok"><i>A világos Pale Ale szí­ne változatos, az egészen világostól a rozsdáig, sötét borostyánig terjed. Ízük általában könnyed, édes, hiányzik belőlük a komló keserűje. </i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Pilsner</td>
                <td class="sortipusok"><i>Fontos jellemzői az igen magas komlótartalom és a tartós habkorona. A pilseni aranyszínű, illatos, virágos bukéval rendelkező, lágy és elegánsan száraz, komlós utóízű világos sör, amelynek alkoholtartalma 4-5%.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Wheat Beer</td>
                <td class="sortipusok"><i>Ma már ez a sör nem feltétlenül tisztán búzából, hanem minimum 50% búzamalátából (a maradék maximum 50% árpamaláta) készül, természetesen víz, komló és élesztő hozzáadásával. Ízesítőanyagokat nem tartalmaz. Fanyar, száraz sör, amelynek színe a világossárgától a sötétsárgáig terjed. </i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Porter</td>
                <td class="sortipusok"><i>Színvilága a sötét borostyántól a rézvörösön keresztül egészen fekete kávéig terjed vörös beütéssel. Az egyik legzamatosabb ale, íze édes, pörkölt aromával, mely feleleveníti az étcsokoládét, a kávébabot és még a sült almát is.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Smoked Beer</td>
                <td class="sortipusok"><i>Ezek a füstölt sörök egyaránt lehetnek Ale-ek és Lagerek is. Füstös aromájukat, ízüket a kemencében szárított árpamalátától kapják.</i></td>
            </tr>
        </table>   
    </fieldset>
</div> <br>

<script src="{{ asset('js/tipusok.js')}}"></script>
</body>
</html>