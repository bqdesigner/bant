// Scroll top Animation
$('.scroll').click(function (e) {
    e.preventDefault();
    $('html,body').animate({
        scrollTop: $(this.hash).offset().top - 90
    }, 900);
});

// accordion
$(document).ready(function () {
    $('.collapse.in').prev('.panel-heading').addClass('active');
    $('#accordion, #bs-collapse')
        .on('show.bs.collapse', function (a) {
            $(a.target).prev('.panel-heading').addClass('active');
        })
        .on('hide.bs.collapse', function (a) {
            $(a.target).prev('.panel-heading').removeClass('active');
        });
});
