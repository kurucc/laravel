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
        <legend>Maláták</legend>
        <table id="tabla">
            <tr>
                <th>Típus</th>
                <th>Leírás</th>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Müncheni</td>
                <td class="sortipusok"><i>Egy láger típusú maláta, amit kiváló minőségű két soros tavaszi árpából készítenek. Sötétebb színt ad a sörnek, mint a világos “testvére”. </i></td>
            </tr class="sortipusokrows">

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Pilseni</td>
                <td class="sortipusok"><i>A Weyermann Premium Pilseni a legvilágosabb a maláták között ezáltal ezzel a bázis malátával érhetjük a legvilágosabb lágert vagy ale-t.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Bécsi</td>
                <td class="sortipusok"><i>A Weyermann Bécsi maláta egy enyhén aszalt maláta, ami kiváló minőségű 2 soros tavaszi árpából készül. Arany sárga színt és kellemes édességet ad a sörnek, amiben megtalálhatóak enyhe méz, mandula és mogyoró aromák is.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">CaraPils</td>
                <td class="sortipusok"><i>Egy két soros német árpából készült karamell maláta, ami elősegíti az íz stabilitást és testességet, valamint fokozza a szín intenzitást. </i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Chocolate</td>
                <td class="sortipusok"><i>A Weyermann Csokoládé Tönköly egy pörkölt tönköly búza maláta, ami kiválóan alkalmas a pörkölt és sötét aromák valamint színek fokozására. Rendkívül intenzív kakaós, kávés és étcsokoládés aromákkal rendelkezik.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Carahell</td>
                <td class="sortipusok"><i>A Weyermann CARAHELL maláta kétsoros német árpából készült karamell maláta, ami testesebbé teszi a sört és kellemes karamell aromákat, valamint sötét réz színt ad hozzá.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">CaraAmber</td>
                <td class="sortipusok"><i>A Weyermann Caraamber egy két soros német árpából készült karamell maláta, ami elősegíti az íz stabilitást és testességet, valamint fokozza a szín intenzitást. A vörös szín mellett növeli a máslás hatékonyságát és kellemes tejkaramella, karamell és kenyeres aromákkal gazdagítja sörünket.</i></td>
            </tr>

            <tr class="sortipusokrows">
                <td class="sortipus sortipusok">Pörkölt</td>
                <td class="sortipusok"><i>A Weyermann Pörkölt Árpa  egy malátázatlan pörkölt árpa, ami teljes, intenzív pörkölt aromát kölcsönöz a sörnek.</i></td>
            </tr>
        </table>   
    </fieldset>
</div> <br>

<script src="{{ asset('js/malatak.js')}}"></script>
</body>
</html>