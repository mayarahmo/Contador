$(document).ready( function () {

    var lang = "pt_br";
    var text = ""; // texto para 
    var density_uniques = [];
    
    if ($('.main-section.post-section').length > 0 ){
        $('footer').addClass('post-footer');
    }

    $('lang-link').on('click', function () {
        $(this).addClass('active');
    });

    // remover palavras da tabela de densidades
    function wordRejectList(lang, word){
        var file, cond, retorno;
        var array = [];

        if ( lang == 'pt_br'){
            file = 'includes/script/js/pt_br.txt';
        }

        $('.navbar').append("<input type='hidden' id='wordRejectList'/>");
        
        fetch(file).then(function(response) {
            if(response.ok) { // 200 status
                response.text().then(function(text) {
                    array = text.split(/\s/g);
                    $('#wordRejectList').val(text);
                    cond = true;
                });
            }else{
                console.log("Não deu"+response.status+" - "+response.statusText);
            } 
        });

        alert($('#wordRejectList').val());
        alert(cond);

        // for(i=0;i<array.length;i++){
        //     if ( array[i] == word){ cond = true; /* rejected word */ }
        // }

        var retorno = cond ? true : false;
        return retorno;
    }

    if(wordRejectList("pt_br", "com")){
        alert("Opa!");
    }

    wordRejectList("pt_br", "com")
    alert(document.getElementById('wordRejectList').value);

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


    $('#text').on('keyup', function (){
        text = $(this).val();
        var words = [];
        words = $(this).val().split(/\s/g);
        word_count = words.length;

        var i = 0; j =0;
        var density = []; // array de densidade de palavras com duplicatas
        for(i=0;i<words.length;i++){
            density[i] = [0,words[i].toLowerCase()];
        }

        // gera array sem duplicatas
        var density_uniques = multiDimensionalUnique(density);
        var pos = 0;
        //atribue os pesos de cada palavra ao density_upd
        for(i=0;i<words.length;i++){
            for(j=0;j<density_uniques.length;j++){
                for(k=1;k<density_uniques[j].length;k++){
                    if (density_uniques[j][k] == words[i].toLowerCase()) {
                        density_uniques[j][k - 1]++;
                    }
                }
            }
        }

        var density_ordem = []; // esse array vai guardar as palavras de acordo com o peso
        for(i=1;i<100000;i++){ // rever essa questão desse máximo
            density_ordem[i] = new Array();
        }

        // Ranking de palavras
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
        $("#density-result").append("<tr><th colspan=\"2\">palavra</th><th colspan=\"2\">ocorrências</th><th colspan=\"2\">peso</th></tr>");
        var maximo = 0; // limite de palavras a serem exibidas
        // retorna as 10 primeiras em density-result
        var percentagem = 0;
        var number_zero_before;
        for(i=density_ordem.length-1;i>0;i--){ // pegar as palavras mais usadas
            for(j=0;j<density_ordem[i].length;j++){
                if(density_ordem[i] != [] && density_ordem[i][j] != ""){
                    percentagem = (i / word_count) * 100; 
                    percentagem = Math.round(percentagem * 100) / 100;
                    if (i < 10) { number_zero_before = ('0' + i).slice(-2); } else{ number_zero_before = i;}
                    $("#density-result").append("<tr style=\"width:inherit\"><td colspan=\"2\" class=\"density-word\">"+density_ordem[i][j]+"<td colspan=\"2\" class=\"number-style\" id=\"word-ocurrences\">"+number_zero_before+"</td><td colspan=\"2\" class=\"number-style\">"+percentagem+"%</td></tr>");
                    maximo++;
                } 
                if(maximo > 10) {break;}    
            }
            if(maximo > 10) {break;}  
        }           
    });

    i = 0;
    $(".btn-upperlower").click("toogle",function () {

        if (i == 0){
            $("#text").val($("#text").val().toUpperCase()); i++;
        }else if (i == 1){
            $("#text").val($("#text").val().toLowerCase()); i++;
        }else{
            $("#text").val(text); i = 0;
        }
    });

});