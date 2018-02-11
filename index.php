<html lang="pt-br" prefix="og: http://contadordepalavras.net/ns#">
<head>
<?php include_once "head.php"; ?>

</head>
<body>
<?php include_once "navbar.php"; ?>
<div id="main-content" class="main-content col-xs-12">
    <div id="main-form"  class="col-xs-12 col-md-6 float-left">

        <div class="info-bar" id="info-bar" class="col-xs-12 col-md-6">
<!--            <span>Palavras: </span><span class="word-count">00</span>-->
<!--            <span>Caracteres: </span><span class="character-count">00</span>-->
            <?php include_once "includes/script/js/jQuery-File-Upload-master/index.html"; ?>
        </div>
        <form name="form-text" method="post" action="" class="">
            <textarea id="text" name="text" cols="75" rows="12" placeholder="<-- Copie e cole seu texto aqui e veja o que acontece -->"></textarea><BR/>
            <!--    <button type="submit">Contar</button>-->
        </form>
        <div id="functions-bar" class="functions-bar float-left">
<!--            <form id="form-functions" class="form-functions" action="">-->

                <input type="text" name="word" id="word" class="word ipt-count-word">&nbsp;<button class="btn-count-word" onclick="countOcurrences(document.getElementById('word').value)">Conta palavra</button><span class="word-ocurrences number-style" id="word-ocurrences">00</span>
                <button onclick="revert()" name="" class="btn-blue btn-invert-text">Inverte texto &#8645;</button>
                <button onclick="" name="" class="btn-orange btn-upperlower">Aa</button><br/>
<!--                <input type="text" name="lorem" id="lorem" class="ipt-count-lorem" placeholder="Qtd de parágrafos">&nbsp;<button class="btn-lorem" onclick="countOcurrences(document.getElementById('word').value)">Gerador de lorem ipsum</button>-->
<!--
                </form>-->
        </div>
        <div class="row col-md-12 col-xs-6">
        <div class="col-md-12 col-xs-12 bloco-msg" id="bloco-msg">
            <ul class="tab nav-tabs">
                <li class="nav-item aba-item"><a class="nav-link active" href="#">Passos básicos de uso</a></li>
    <!--            <li class="nav-item"><a class="nav-link" href="#">Passos básicos</a></li>-->
    <!--            <li class="nav-item"><a class="nav-link" href="#">Passos básicos</a></li>-->
            </ul>
            <p class="msg msg-active">Essa é a ferramenta gratuita mais completa de estatísticas de texto em português é só o começo. Conte palavras, caracteres, linhas, parágrafos, sentenças, ocorrências
                de uma determinada palavra ou inverta uma URL. </p>
        </div>
        <div id="adsense-1" class="adsense1 col-md-12 desktop">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block; text-align:center;"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="ca-pub-2037981448650235"
                 data-ad-slot="1896425862"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    </div>
    <div id="main-info-table" class="main-info-table col-xs-12 col-md-6 float-right">
        <table id="table-stats" class="table-stats col-md-12">
            <tr>
                <th colspan="2">Estatísticas básicas</th>
            </tr>
            <tr>
                <td>idioma</td><td><span class="">português</span></td>
            </tr>
            <tr>
                <td>palavras</td><td><span class="word-count number-style">00</span></td>
            </tr>
            <tr>
                <td>caracteres</td><td><span class="character-count number-style">00</span></td>
            </tr>
            <tr>
                <td>linhas</td><td><span class="line-count number-style">00</span></td>
            </tr>
            <tr>
                <th colspan="2">Outras estatísticas</th>
            </tr>
            <tr>
                <td>parágrafos</td><td><span class="paragraph-count number-style">00</span></td>
            </tr>
            <tr>
<!--                <td>Sílabas</td><td><span class="">-</span></td>-->
<!--            </tr>-->
                <td>sentenças</td><td><span class="sentence-count number-style">01</span></td>
<!--            <tr>-->
<!--                <td>Palavras únicas</td><td><span class="word-count">00</span></td>-->
            </tr>
            <table id="density-result" class="density-result">
               <tr><th colspan="6">Densidade de palavras (Top 10 mais usadas)</th></tr>
               <tr><th colspan="2">palavra</th><th colspan="2">ocorrências</th><th colspan="2">peso</th></tr>
            </table>
        </table>
    </div>
</div>
<?php include_once "scripts.php" ?>
</body>
</html>