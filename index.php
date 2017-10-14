<?php
/**
 * Created by PhpStorm.
 * User: maya
 * Date: 8/28/17
 * Time: 12:45 AM
 *
 */
?>
<html>
<head>
    <title>Contador de palavras</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



    <!-- MAIN STYLESHEET -->
    <link rel="stylesheet" href="includes/style/main.css"/>
</head>
<body>
<h1>Contador de palavras</h1>
<div>
    <span>Palavras: </span><span class="word-count">0</span><BR/>
    <span>Caracteres: </span><span class="character-count">0</span><BR/>
<form name="form-text" method="post" action="">
    <textarea id="text" name="text" cols="75" rows="15"></textarea><BR/>
<!--    <button type="submit">Contar</button>-->
</form>


</div>
<div>
    <table>
        <tr>
            <th>Estatísticas básicas</th>
        </tr>
        <tr>
            <td>Palavras</td><td><span class="word-count">0</span></td>
        </tr>
        <tr>
            <td>Caracteres</td><td><span class="character-count">0</span></td>
        </tr>
        <tr>
            <th>Outras estatísticas</th>
        </tr>
        <tr>
            <td>Parágrafos</td><td><span class="paragraph-count">0</span></td>
        </tr>
        <tr>
            <td>Sílabas</td><td><span class="">0</span></td>
        </tr>
            <td>Sentenças</td><td><span class="">0</span></td>
        <tr>
            <td>Palavras únicas</td><td><span class="">0</span></td>
        </tr>
    </table>
</div>
<!-- OS SCRIPTS -->
<script type="application/javascript">

    var textareaText = document.getElementById('text');

    textareaText.onkeyup = function(){

        if (this.value != ""){

            blocks = this.value.split(/\s/g); //all spaces types, each block is separated by space
            characters = this.value.split(/\S/g); //everything is not a space
            paragraphs = this.value.split(/\n/g); // all paragraphs

            // remove espaços em branco do array
            blocks = blocks.filter(function(str) {
                return /\S/.test(str);
            });

            wordCounts = document.getElementsByClassName('word-count');
            characterCounts = document.getElementsByClassName('character-count');
            paragraphCounts = document.getElementsByClassName('paragraph-count');

            for(i=0;i<wordCounts.length;i++){
                wordCounts[i].textContent = blocks.length;
            }

            for(i=0;i<characterCounts.length;i++){
                characterCounts[i].textContent = characters.length -1;
            }

            for(i=0;i<paragraphCounts.length;i++){
                paragraphCounts[i].textContent = paragraphs.length;
            }
        }else{
            for(i=0;i<wordCounts.length;i++){
                wordCounts[i].textContent = 0;
            }

            for(i=0;i<characterCounts.length;i++){
                characterCounts[i].textContent = 0;
            }

            for(i=0;i<paragraphsCounts.length;i++){
                paragraphCounts[i].textContent = 0;
            }
        }

    }

</script>

<!-- JQUERY PARA O BOOSTRAP JAVASCRIPT FUNCIONAR -->
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
<!-- JAVASCRIPT DO BOOTSTRAp -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/includes/jquery/slideshow/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>