$(document).ready(function ()
{
    //oldal befadelés
    $("html").fadeIn(1000);

    var max = {}; 
    var keszDB=0;
    var keszitendoDB=0;

    //Elkészített sörök megszámlálása, egyes típusok megszámlálása
    $("tr.kesz").each(function()
    {
        $(this).find("td.fajta").each(function()
        {
            var tipus= $(this).text();
            if(tipus in max)
            {
                let m = max[tipus]+1;
                max[tipus] = m;
            }
            else
            {
                max[tipus]=1;
            }
        });
        keszDB++;
    });

    //Elkészítendő sörök darabszámának meghatározása
    $("tr.keszitendo").each(function()
    {
        keszitendoDB++;
    });

    //A legtöbbször elkészített sör(ök) darabszámának meghatározása       
    var maxDB=0;
    for (let key in max)
    {
        if(max[key] > maxDB)
        {
            maxDB=max[key];
        }
    } 
       
    //elkészített sörök darabszámának kiíratása és táblázat megjelenítése, ha van elkészített sör
    if(keszDB != 0)
    {
        $("#markesz").slideDown(500);
        $("#tabla1").after('<br><div id="elksorok"> Eddig elkészített sörök száma: '+ keszDB +'</div>');
    }
    else
    {
        $("body").append('<div id="elksorok"> Nincsen elkészített sör hozzáadva! </div> <br>');
    }  

    //elkészítendő sörök számának kiíratása és táblázat megjelenítése, ha van elkészítendő sör
    if(keszitendoDB != 0)
    {
        $("#nemkesz").slideDown(500);
        $("#mentes").after('<br><div id="nemelksorok"> Elkészítendő sörök száma: ' + keszitendoDB + '</div>');
    }
    else
    {
        $("body").append('<div id="elksorok"> Nincsen elkészítendő sör hozzáadva! </div> <br>');
    }

    //A legtöbbször elkészített sörök megkeresése, kiíratása
    if(maxDB != 0)
    {
        $("body").append('<div id="max"> A legtöbbször elkészített sör típus(ok):');
        $("#max").append('<ul>')

        for(let key in max)
        {
            if(max[key] === maxDB)
            {
                $("#max").append('<li>' + key + '</li>');
            }
        }

        $("#max").append('</ul>')
        $("body").append('</div>')

    }

    //mentés gomb megjelenítése időpont hozzáadásakor
    $(".fekete").on("change",function()
    {
        $("#mentes").show();
    });  
});