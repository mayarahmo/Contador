$(document).ready( function () {

    if ($('.main-section.post-section').length > 0 ){
        $('footer').addClass('post-footer');
    }

    $('lang-link').on('click', function () {
        $(this).addClass('active');
    });

    $("#word-ocurrences").on('DOMSubtreeModified', function (){
        n = new Number($(this).html());
        v ((n = +n+1) < 10 ? "0" : "") + n;
        alert(v);
        // $(this).textContent = v;
    });
});