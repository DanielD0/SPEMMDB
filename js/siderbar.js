$(document).ready(function() {
    $('i').click(function() {
        $('ul').toggleClass('ul_show');
        $('section').toggleClass('slide_image');
    });
    $('li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    });
});