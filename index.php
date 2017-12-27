<html lang="pt-br">
<head>
<?php include_once "head.php"; ?>
</head>
<body>
<?php include_once "navbar.php"; ?>
<div id="main-content" class="col-xs-12">
    <div id="info-bar" class="col-xs-12">
        <span>Palavras: </span><span class="word-count">00</span>
        <span>Caracteres: </span><span class="character-count">00</span><BR/>
    </div>
    <div id="main-form"  class="col-xs-12 col-md-6 float-left">
        <form name="form-text" method="post" action="" class="">
            <textarea id="text" name="text" cols="75" rows="15"></textarea><BR/>
            <!--    <button type="submit">Contar</button>-->
        </form>
        <div id="functions-bar" class="float-left">
<!--            <form id="form-functions" action="">-->
                <input type="text" name="word" id="word" class="ipt-count-word">&nbsp;<button class="btn-count-word" onclick="countOcurrences(document.getElementById('word').value)">Conta palavra</button><span id="word-ocurrences">00</span>
                <button onclick="revert()" name="" class="btn-invert-text">Inverter texto &#8645;</button>
<!--
                </form>-->
        </div>
    </div>
    <div id="main-info-table" class="col-xs-12 col-md-6 float-right">
        <table id="table-stats" class="col-md-12">
            <tr>
                <th colspan="2">Estatísticas básicas</th>
            </tr>
            <tr>
                <td>Palavras</td><td><span class="word-count">00</span></td>
            </tr>
            <tr>
                <td>Caracteres</td><td><span class="character-count">00</span></td>
            </tr>
            <tr>
                <th colspan="2">Outras estatísticas</th>
            </tr>
            <tr>
                <td>Parágrafos</td><td><span class="paragraph-count">00</span></td>
            </tr>
            <tr>
                <td>Sílabas</td><td><span class="">-</span></td>
            </tr>
            <td>Sentenças</td><td><span class="sentence-count">01</span></td>
            <tr>
                <td>Palavras únicas</td><td><span class="word-count">00</span></td>
            </tr>
        </table>
        <div id="adsense-1" class="col-md-12">
            <!-- PUT ADSENSE CODE HERE -->
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>
<!--<script>-->
<!--$(document).ready( function () {-->
<!--    alert("oi");-->
<!--});-->
<!--</script>-->
</body>
</html>