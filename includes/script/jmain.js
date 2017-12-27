$(document).ready( function () {
    $("#word-ocurrences").on('DOMSubtreeModified', function (){
        n = $(this).html();
        v ((n = +n+1) < 10 ? "0" : "") + n;
        $(this).textContent = v;
    });
});