// Animação da Navbar ao fazer scroll
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.navbar').addClass('navbar-scrolled');
    } else {
        $('.navbar').removeClass('navbar-scrolled');
    }
});

// Animação do Footer
$('.footer').hover(
    function () {
        $(this).addClass('animated pulse');
    },
    function () {
        $(this).removeClass('animated pulse');
    }
);



