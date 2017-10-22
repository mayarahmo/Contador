<?php
/**
 * Created by PhpStorm.
 * User: maya
 * Date: 8/28/17
 * Time: 12:45 AM
 *
 */
?>
<html lang="pt-br">
<head>
    <title>Contador de palavras</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- BOATSTRAP REQUIREMENTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- MAIN STYLESHEET -->
    <link rel="stylesheet" href="includes/style/main.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#">Contador de palavras</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ajude o contador</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link disabled" href="#">Disabled</a>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                <div class="dropdown-menu" aria-labelledby="dropdown01">-->
<!--                    <a class="dropdown-item" href="#">Action</a>-->
<!--                    <a class="dropdown-item" href="#">Another action</a>-->
<!--                    <a class="dropdown-item" href="#">Something else here</a>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
    </div>
</nav>
<div id="main-content" class="col-xs-12">
    <div id="info-bar" class="col-xs-12">
        <span>Palavras: </span><span class="word-count">0</span>
        <span>Caracteres: </span><span class="character-count">0</span><BR/>
    </div>
    <div id="main-form"  class="col-xs-12 col-md-6 float-left">
        <form name="form-text" method="post" action="" class="col-md-11">
            <textarea id="text" name="text" cols="75" rows="15"></textarea><BR/>
            <!--    <button type="submit">Contar</button>-->
        </form>
        <div id="functions-bar" class="row">
<!--            <form id="form-functions" action="">-->
                <button onclick="revert()" name="">Reverter texto</button>
                <input type="text" name="word" id="word">&nbsp;<button onclick="countOcurrences(document.getElementById('word').value)">Contar ocorrências</button><span id="word-ocurrences"></span>
<!--            </form>-->
        </div>
    </div>
    <div id="main-info-table" class="col-xs-12 col-md-6 float-right">
        <table id="table-stats" class="col-md-12">
            <tr>
                <th colspan="2">Estatísticas básicas</th>
            </tr>
            <tr>
                <td>Palavras</td><td><span class="word-count">0</span></td>
            </tr>
            <tr>
                <td>Caracteres</td><td><span class="character-count">0</span></td>
            </tr>
            <tr>
                <th colspan="2">Outras estatísticas</th>
            </tr>
            <tr>
                <td>Parágrafos</td><td><span class="paragraph-count">0</span></td>
            </tr>
            <tr>
                <td>Sílabas</td><td><span class="">-</span></td>
            </tr>
            <td>Sentenças</td><td><span class="sentence-count">1</span></td>
            <tr>
                <td>Palavras únicas</td><td><span class="word-count">0</span></td>
            </tr>
        </table>
        <div id="adsense-1" class="col-md-12">
            <!-- PUT ADSENSE CODE HERE -->
        </div>
    </div>
</div>
<!-- OS SCRIPTS -->
<script type="application/javascript">

    var textareaText = document.getElementById('text');

    textareaText.onkeyup = function(){

        if (this.value != ""){

            words = this.value.split(/\s/g); //all spaces types, each block is separated by space
            characters = this.value.split(/\S/g); //everything is not a space
            paragraphs = this.value.split(/\n/g); // all paragraphs
            sentences = this.value.split("."); // all sentences

            // remove espaços em branco do array
            words = words.filter(function(str) {
                return /\S/.test(str);
            });

            // remove espaços em branco do array
            sentences = sentences.filter(function(str) {
                return /\S/.test(str);
            });

            wordCounts = document.getElementsByClassName('word-count');
            characterCounts = document.getElementsByClassName('character-count');
            paragraphCounts = document.getElementsByClassName('paragraph-count');
            sentenceCounts = document.getElementsByClassName('sentence-count');

            for(i=0;i<wordCounts.length;i++){
                wordCounts[i].textContent = words.length;
            }

            for(i=0;i<characterCounts.length;i++){
                characterCounts[i].textContent = characters.length -1;
            }

            for(i=0;i<paragraphCounts.length;i++){
                paragraphCounts[i].textContent = paragraphs.length;
            }

            for(i=0;i<sentenceCounts.length;i++){
                sentenceCounts[i].textContent = sentences.length;
            }
        }else{
            for(i=0;i<wordCounts.length;i++){
                wordCounts[i].textContent = 0;
            }

            for(i=0;i<characterCounts.length;i++){
                characterCounts[i].textContent = 0;
            }

            for(i=0;i<paragraphCounts.length;i++){
                paragraphCounts[i].textContent = 0;
            }

            for(i=0;i<sentenceCounts.length;i++){
                sentenceCounts[i].textContent = 0;
            }
        }

    }

    function revert(){
       var content =  textareaText.value.split("").reverse().join("");
        textareaText.value = content;
    }

    function countOcurrences(word){
        words = textareaText.value.split(/\s/g); //all spaces types, each block is separated by space
        var count = 0;
        for(i=0;i<words.length;i++){
            if(words[i] == word) count++;
        }
        if(document.getElementById("word").value != "") document.getElementById("word-ocurrences").innerHTML = count;
    }

</script>
</body>
</html>