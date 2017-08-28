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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- MAIN STYLESHEET -->
    <link rel="stylesheet" href="includes/style/main.css"/>
</head>
<body>
<h1>Contador de palavras</h1>
<div>
    <span>Palavras: </span><span id="word-count"></span><BR/>
    <span>Caracteres: </span><span id="character-count"></span><BR/>
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
            <td>Palavras</td><td>Yellow</td>
        </tr>
        <tr>
            <td>Caracteres</td><td>Yellow</td>
        </tr>
        <tr>
            <th>Outras estatísticas</th>
        </tr>
        <tr>
            <td>Parágrafos</td><td>Yellow</td>
        </tr>
        <tr>
            <td>Sílabas</td><td>Yellow</td>
        </tr>
            <td>Sentenças</td><td>Yellow</td>
        <tr>
            <td>Palavras únicas</td><td>Yellow</td>
        </tr>
    </table>
</div>
<!-- OS SCRIPTS -->
<script type="application/javascript">

    var textareaText = document.getElementById('text');

    textareaText.onkeyup = function(){
        spaces = this.value.split(/\s/g); //all spaces types
        characters = this.value.split(/\s/g); //all

        WordCount = document.getElementById('word-count');
        //alert(content.length);
        WordCount.textContent = spaces.length;
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