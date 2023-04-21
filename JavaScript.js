$(document).ready(function () {
    // при клике на кнопку бургер меню показываем/скрываем меню
    $('.burger-menu-btn').click(function () {
        $('nav').slideToggle();
    });

    // при изменении размера экрана скрываем меню
    $(window).resize(function () {
        if ($(window).width() > 600) {
            $('nav').removeAttr('style');
        }
    });
});


$(document).ready(function () {
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        var offset = $('.parallax').offset().top;
        var height = $('.parallax').outerHeight();

        // Если блок .parallax виден на экране, меняем позицию фонового изображения
        if (offset + height > scrollTop && offset < scrollTop + $(window).height()) {
            $('.parallax').css('background-position-y', (offset - scrollTop) / 2 + 'px');
        }
    });
});
document.querySelector('.burger-menu-btn').addEventListener('click', function () {
    document.querySelector('nav').classList.toggle('show');
});