$(function(){
    var typed = new Typed('#typed', {
        strings: ['Olá!', "Olá! <br> me chamo Renan, <br>sou desenvolvedor Front-end."],
        typeSpeed: 25,
        backSpeed: 0,
        showCursor: false,
    });
})

$(function(){
$(".rolagem").click(function() {
    var href =$(this).attr("href");
    $("body, html").animate({
        scrollTop: $(href).offset().top
        }, 1000)
    });
});
