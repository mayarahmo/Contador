$(document).ready( function () {

    var teste = 0;

    if ($('.main-section.post-section').length > 0 ){
        $('footer').addClass('post-footer');
    }

    $('lang-link').on('click', function () {
        $(this).addClass('active');
    });

    $('#text').on('keyup', function (){
        var words = [];
        words = $(this).val().split(/\s/g);

        var i = 0;
        var density = []; // array de densidade de palavras com duplicatas
        for(i=0;i<words.length;i++){
            density[i] = [0,words[i]];
        }
        var density_upd = [];
        // criar density_upd a partir da remoção das duplicatas de density
        // atribue os pesos de cada palavra ao density_upd
        for(i=0;i<density.length;i++){
            alert(density[i])
        }


    });

});