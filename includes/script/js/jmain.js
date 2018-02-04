$(document).ready( function () {

    var teste = 0;
    var original_text = "";

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
        original_text = $(this).val();
        var words = [];
        words = $(this).val().split(/\s/g);
        word_count = words.length;
        // alert(word_count);

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

        var density_ordem = []; // esse array vai guardar as palavras de acordo com o peso
        for(i=1;i<10000;i++){ // rever essa questão desse máximo
            density_ordem[i] = new Array();
        }

        var indice = 0;
        // for(i=0;i<words.length;i++){
            for(j=0;j<density_uniques.length;j++){
                for(k=1;k<density_uniques[j].length;k++){
                    indice = density_uniques[j][k-1];
                    if (density_ordem[indice].indexOf(density_uniques[j][k]) == -1){
                        density_ordem[indice].push(density_uniques[j][k]); 
                    }     
                    // na posição 1 haverá todas as palavras com 1 ocorrência
                }    
            }    
        // } 

        $("#density-result").text("");
        $("#density-result").append("<tr><th colspan=\"6\">Densidade de palavras (Top 10 mais usadas)</th></tr>");
        $("#density-result").append("<tr><th colspan=\"2\">Palavra</th><th colspan=\"2\">Ocorrência</th><th colspan=\"2\">Peso</th></tr>");
        var maximo = 0; // limite de palavras a serem exibidas
        // retorna as 10 primeiras em density-result
        var percentagem = 0;
        for(i=density_ordem.length-1;i>0;i--){ // pegar as palavras mais usadas
            for(j=0;j<density_ordem[i].length;j++){
                if(density_ordem[i] != [] && density_ordem[i][j] != ""){
                    percentagem = (parseInt(density_ordem[i]) / parseInt(word_count)); 
                    // alert(percentagem);
                    $("#density-result").append("<tr style=\"width:inherit\"><td colspan=\"2\">"+density_ordem[i][j]+"<td colspan=\"2\">"+i+"</td><td colspan=\"2\">"+percentagem+"</td></tr>");
                    maximo++;
                } 
                if(maximo > 10) {break;}    
            }
        }           
    });

    i = 0;
    $(".btn-upperlower").click("toogle",function () {

        if (i == 0){
            $("#text").val($("#text").val().toUpperCase()); i++;
        }else if (i == 1){
            $("#text").val($("#text").val().toLowerCase()); i++;
        }else{
            $("#text").val(original_text); i = 0;
        }
    });

});