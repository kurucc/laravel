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

    @if (Auth::check())
    <span class="fooldalspan"><a href="/logout">Kijelentkezés</a></span>
    <h1>Üdv itt, {{ $name }}</h1>
    <h2>Adj hozzá elkészített/elkészítendő sört!</h2>

    <fieldset id="sorok">
        <legend>Söreim</legend>
        <table id="tabla">
            <tr>
                <th><a href="{{ url('tipusok') }}">Típus</a></th>
                <th><a href="{{ url('malatak') }}">Maláta</a></th>
                <th><a href="{{ url('komlok') }}">Komló</a></th>
                <th><a href="{{ url('elesztok') }}">Élesztő</a></th>
                <th>Cukor</th>
                <th>Moszat</th>
                <th>Laktóz</th>
                <th>Megcsinált</th>
                <th>Mikor</th>
            </tr>
            <form action="/" method="POST">
            @csrf
             <tr>
                <td>
                    <select name="tipusok" id="tipusok" required>
                        <option value="" selected disabled hidden>Válassz</option>
                        <option value="IPA">IPA</option>
                        <option value="Tropical IPA">Tropical IPA</option>
                        <option value="APA">APA</option>
                        <option value="Stout">Stout</option>
                        <option value="Imperial Stout">Imperial Stout</option>
                        <option value="Pale Ale">Pale Ale</option>
                        <option value="Pilsner">Pilsner</option>
                        <option value="Wheat Beer">Wheat Beer</option>
                        <option value="Porter">Porter</option>
                        <option value="Smoked Beer">Smoked Beer</option> 
                    </select>
                </td>
                <td>
                    <select name="malatak" id="malatak" required>
                        <option value="" selected disabled hidden>Válassz</option>
                        <option value="Müncheni">Müncheni</option>
                        <option value="Pilseni">Pilseni</option>
                        <option value="Bécsi">Bécsi</option>
                        <option value="CaraPils">CaraPils</option>
                        <option value="Chocolate">Chocolate</option>
                        <option value="Carahell">Carahell</option>
                        <option value="CaraAmber">CaraAmber</option>
                        <option value="Pörkölt">Pörkölt</option>
                    </select>
                </td>
                <td>
                    <select name="komlok" id="komlok" required>
                        <option value="" selected disabled hidden>Válassz</option>
                        <option value="Saaz">Saaz</option>
                        <option value="Hallertaui Perle">Hallertaui Perle</option>
                        <option value="Magnum">Magnum</option>
                        <option value="Cascade">Cascade</option>
                        <option value="Centennial">Centennial</option>
                        <option value="Styrian Golding">Styrian Golding</option>
                    </select>
                </td>
                <td>
                    <select name="elesztok" id="elesztok" required>
                        <option value="" selected disabled hidden>Válassz</option>
                        <option value="Ale">Ale</option>
                        <option value="Lager">Lager</option>
                        <option value="Lambic">Lambic</option>
                    </select>
                </td>
                <td>
                    <select name="cukor" id="cukor" required>
                        <option value="" selected disabled hidden>Válassz</option>
                        <option value="Van">Van</option>
                        <option value="Nincs">Nincs</option>
                    </select>
                </td>
                <td>
                    <select name="moszat" id="moszat" required>
                        <option value="" selected disabled hidden>Válassz</option>
                        <option value="Van">Van</option>
                        <option value="Nincs">Nincs</option>
                    </select>
                </td>
                <td>
                    <select name="laktoz" id="laktoz" required>
                        <option value="" selected disabled hidden>Válassz</option>
                        <option value="Van">Van</option>
                        <option value="Nincs">Nincs</option>
                    </select>
                </td>
                <td>
                    <select name="megcsinalt" id="megcsinalt" required>
                        <option value="" selected disabled hidden>Válassz</option>
                        <option value="Igen">Igen</option>
                        <option value="Nem">Nem</option>
                    </select>
                </td>
                <td><input type="date" name="mikor"></td>
            </tr>
        </table>
        
    </fieldset> 
        <span id="eddigispan"><a href="eddigi-sorok" id="eddigi">Eddigi söreim</a></span>
        <br>
        <input type="submit" value="Mentés" name="submit">
    </form>

    @else
    <h1>Üdv! </h1>
    <h2>Sör hozzáadásához <a id="log" href="{{ route('login') }}">jelentkezz</a> be vagy <a id="log" href="{{ route('register') }}">regisztrálj</a>!</h2>
    @endif
    

</body>
</html>