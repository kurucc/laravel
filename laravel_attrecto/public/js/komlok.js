$(document).ready(function () 
{
    //táblázat és "főoldal" beanimálása
    $("div").width(300).height(300).show(400).animate({width:600},400,
    function()
    {
        $(this).animate({height:850},400); 
        $(".fooldalspan").fadeIn(400);
    });
});