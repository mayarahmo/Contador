$(document).ready( function () {

    var teste = 0;

    if ($('.main-section.post-section').length > 0 ){
        $('footer').addClass('post-footer');
    }

    $('lang-link').on('click', function () {
        $(this).addClass('active');
    });

    // gera array sem duplicatas
    function multiDimensionalUnique(arr) {
        var uniques = [];
        var itemsFound = {};
        for(var i = 0, l = arr.length; i < l; i++) {
            var stringified = JSON.stringify(arr[i]);
            if(itemsFound[stringified]) { continue; }
            uniques.push(arr[i]);
            itemsFound[stringified] = true;
        }
        return uniques;
    }

    var density_uniques = [];
    $('#text').on('keyup', function (){
        var words = [];
        words = $(this).val().split(/\s/g);

        var i = 0; j =0;
        var density = []; // array de densidade de palavras com duplicatas
        for(i=0;i<words.length;i++){
            density[i] = [0,words[i]];
        }

        // gera array sem duplicatas
        var density_uniques = multiDimensionalUnique(density);
        var pos = 0;
        //atribue os pesos de cada palavra ao density_upd
        for(i=0;i<words.length;i++){
            for(j=0;j<density_uniques.length;j++){
                for(k=1;k<density_uniques[j].length;k++){
                    if (density_uniques[j][k] == words[i]) {
                        density_uniques[j][k - 1]++;
                    }
                }
            }
        }

        // ordernar density_uniques pela soma

    });

});