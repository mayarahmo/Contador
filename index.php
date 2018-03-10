<html lang="pt-br" prefix="og: http://contadordepalavras.net/ns#">
<head>
<?php include_once "head.php"; ?>
</head>
<body>
<?php include_once "navbar.php"; ?>
<div id="main-content" class="main-content col-xs-12">
    <div id="main-form"  class="col-xs-12 col-md-6 float-left">

        <div class="info-bar" id="info-bar" class="col-xs-12 col-md-6">
            <?php include_once "includes/script/js/jQuery-File-Upload-master/index.html"; ?>
        </div>
        <form name="form-text" method="post" action="" class="">
            <textarea id="text" name="text" cols="75" rows="12" placeholder="<-- Copie e cole seu texto aqui e veja o que acontece -->"></textarea><BR/>
            <!--    <button type="submit">Contar</button>-->
        </form>
        <div id="functions-bar" class="functions-bar float-left">
                <input type="text" name="word" id="word" class="btnfunc word ipt-count-word">&nbsp;<button class="btn-count-word" onclick="countOcurrences(document.getElementById('word').value)">Conta palavra</button><span class="word-ocurrences number-style" id="word-ocurrences">00</span>
                <button onclick="revert()" name="" class="btnfunc btn-blue btn-invert-text">Inverte texto &#8645;</button>
                <button onclick="" name="" class="btnfunc btn-orange btn-upperlower">Aa</button>
                <button onclick="" name="" class="btnfunc"><a href="https://br.lipsum.com/" target="_blank">Gerador de texto linguiça</a></button>
                <button onclick="" name="" class="btnfunc btn-blue"><a href="https://goo.gl/" target="_blank">Criador de link limpo</a></button>
        </div>
        <div class="row col-md-12 col-xs-6">
        <div class="col-md-12 col-xs-12 aba-msg" id="aba-msg">
            <ul class="tab nav-tabs">
                <li class="nav-item aba-item"><a class="nav-link active" href="#">Bem vindo(a) ao Contador</a></li>
    <!--            <li class="nav-item"><a class="nav-link" href="#">Passos básicos</a></li>-->
            </ul>
            <p class="msg msg-active">Essa é a ferramenta gratuita que pretende ser a ferramenta de estatísticas de texto mais completa. Conte palavras, caracteres, linhas, parágrafos, sentenças, ocorrências
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
                <td>sentenças</td><td><span class="sentence-count number-style">01</span></td>
            </tr>
            <tr>
                <th></th>
                <th></th>
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