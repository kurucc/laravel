$(document).ready(function ()
{
    //Ha nincs bejelentkezve a felhasználó az akkor kiírandó szöveg slidedownolása
    $(".rejtve").slideDown(350);
    
    //Ha be van jelentkezve a felhasználó az üdvözlő szöveg, táblázat slidedownolása és "kijelentkezés" és "eddigi söreim" befadelése 
    $("#rejtve1").slideDown(350, 
    function()
    {
        $("#rejtve2").slideDown(350,
        function()
        {
            $("#rejtve3").slideDown(350);
            $(".rejtve4").fadeIn(350);
        });
    });
           
    //Ha a megcsinált opció "igen" akkor a dátum beviteli mezőt megjeleniti és a mentéshez kötelező kitölteni
    //Ha a megcsinált opció "nem" akkor a dátum beviteli mező nem jelenik meg/ eltűnik és nem kötelező kitölteni
    $("#megcsinalt").change(function () 
    { 
        if($("#megcsinalt").val()==="Igen")
        {
            $("#mikor").show();
            $("#datum").show();
            $("#idopont").attr("required",true);
        }
        else
        {
            $("#mikor").hide();
            $("#datum").hide();
            $("#idopont").attr("required",false);         
        }               
    });

    //Egyéb típus megadása
    $("#tipusok").change(function()
    {
        if($("#tipusok option:selected").val()==="Új")
        {
            let t = window.prompt("Új típus neve: ","");

            if((t != null) && (t != ""))
            {
                $("body").append('<div class="siker">Sikeres megadás!</div>')
                $(".siker").css({"margin":"auto","max-width":"max-content","text-align":"center","background-color":"black","font-size":"30px","color":"green","font-weight":"bold"});
                $(".siker").fadeOut(3200,function()
                {
                    $(this).remove();
                });
                $("#tipusok").prepend('<option selected value="' + t + '">' + t + '</option>');
            }
            else
            {
                $("body").append('<div class="sikertelen">Sikertelen megadás!</div>')
                $(".sikertelen").css({"margin":"auto","max-width":"max-content","text-align":"center","background-color":"black","font-size":"30px","color":"red","font-weight":"bold"});
                $(".sikertelen").fadeOut(3200,function()
                {
                    $(this).remove();
                });
            }       
        }
    });

    //Egyéb maláta megadása
    $("#malatak").change(function()
    {
        if($("#malatak option:selected").val()==="Új")
        {
            let m = window.prompt("Új maláta neve: ","");

            if((m != null) && (m != ""))
            {
                $("body").append('<div class="siker">Sikeres megadás!</div>')
                $(".siker").css({"margin":"auto","max-width":"max-content","text-align":"center","background-color":"black","font-size":"30px","color":"green","font-weight":"bold"});
                $(".siker").fadeOut(3200,function()
                {
                    $(this).remove();
                });
                $("#malatak").prepend('<option selected value="' + m + '">' + m + '</option>');
            }
            else
            {
                $("body").append('<div class="sikertelen">Sikertelen megadás!</div>')
                $(".sikertelen").css({"margin":"auto","max-width":"max-content","text-align":"center","background-color":"black","font-size":"30px","color":"red","font-weight":"bold"});
                $(".sikertelen").fadeOut(3200,function()
                {
                    $(this).remove();
                });
            }
        }
    });

    //Egyéb komló megadása
    $("#komlok").change(function()
    {
        if($("#komlok option:selected").val()==="Új")
        {
            let k = window.prompt("Új komló neve: ","");

            if((k != null) && (k != ""))
            {
                $("body").append('<div class="siker">Sikeres megadás!</div>')
                $(".siker").css({"margin":"auto","max-width":"max-content","text-align":"center","background-color":"black","font-size":"30px","color":"green","font-weight":"bold"});
                $(".siker").fadeOut(3200,function()
                {
                    $(this).remove();
                });
                $("#komlok").prepend('<option selected value="' + k + '">' + k + '</option>');
            }
            else
            {
                $("body").append('<div class="sikertelen">Sikertelen megadás!</div>')
                $(".sikertelen").css({"margin":"auto","max-width":"max-content","text-align":"center","background-color":"black","font-size":"30px","color":"red","font-weight":"bold"});
                $(".sikertelen").fadeOut(3200,function()
                {
                    $(this).remove();
                });
            }
        }
    });

    //Egyéb élesztő megadása
    $("#elesztok").change(function()
    {
        if($("#elesztok option:selected").val()==="Új")
        {
            let e = window.prompt("Új élesztő neve: ","");

            if((e != null) && (e != ""))
            {
                $("body").append('<div class="siker">Sikeres megadás!</div>')
                $(".siker").css({"margin":"auto","max-width":"max-content","text-align":"center","background-color":"black","font-size":"30px","color":"green","font-weight":"bold"});
                $(".siker").fadeOut(3200,function()
                {
                    $(this).remove();
                });
                $("#elesztok").prepend('<option selected value="' + e + '">' + e + '</option>');
            }
            else
            {
                $("body").append('<div class="sikertelen">Sikertelen megadás!</div>')
                $(".sikertelen").css({"margin":"auto","max-width":"max-content","text-align":"center","background-color":"black","font-size":"30px","color":"red","font-weight":"bold"});
                $(".sikertelen").fadeOut(3200,function()
                {
                    $(this).remove();
                });
            }
        }
    });
});