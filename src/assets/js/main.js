$(function(){
    var typed = new Typed('#typed', {
        strings: ['Olá!', "Olá! <br> me chamo Renan, <br>sou desenvolvedor Front-end."],
        typeSpeed: 25,
        backSpeed: 0,
        showCursor: false,
    });
})

// $(function(){
// $(".rolagem").click(function() {
//     var href =$(this).attr("href");
//     $("body, html").animate({
//         scrollTop: $(href).offset().top
//         }, 1000)
//     });
// });

$(function(){
    $('.carrossel-tipbar').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        arrows: false,
        dots: true,
        autoplay: true,
        responsive: [
        {
            breakpoint: 768,
            settings: 'unslick'
        }
        ]
    });
    $(window).on('resize', function () {
        $('.session-projetos').slick('resize');
    });
})

// $(function(){
//     $('a.nav-link').click(function(){
//         $('a.nav-link').removeClass("active");
//         $(this).addClass("active");
//     });
// })


$(document).ready(function () {
    $(window).scroll(function(){
            var window_top = $(window).scrollTop() + 12; 
           // the "12" should equal the margin-top value for nav.stickydiv
            var div_top = $('header').offset().top;
            if (window_top >= div_top) {
                    $('nav').addClass('active');
                } else {
                    $('nav').removeClass('active');
                }
        });  
    
      $(document).on("scroll", onScroll);
    
    $('a[href^="#"]').on('click', function (e) {
          e.preventDefault();
            $(document).off("scroll");
             $('a.nav-link').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');
             var target = this.hash,
             menu = target;
             $target = $(target);
           $('html, body').stop().animate({
                'scrollTop': $target.offset().top+2
            }, 600, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });
    
    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        $('#textoNavbar a').each(function () {
            var currLink = $(this);
           var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#textoNavbar ul li a').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
        });
    }
