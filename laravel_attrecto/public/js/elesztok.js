$(document).ready(function () 
{
    //táblázat és "főoldal" beanimálása
    $("div").width(300).height(150).show(400).animate({width:600},400,
    function()
    {
        $(this).animate({height:400},400);
        $(".fooldalspan").fadeIn(400);
    });
});