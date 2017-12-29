$(document).ready( function () {
    alert("oi");
    $("#word-ocurrences").on('DOMSubtreeModified', function (){
        alert($(this).html());
        // n = $(this).html();
        // n = new Number(n);
        // v ((n = +n+1) < 10 ? "0" : "") + n;
        // alert(v);
        // $(this).textContent = v;
    });
});