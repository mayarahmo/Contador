<html lang="pt-br">
<head>
    <?php include_once "head.php"; ?>
</head>
<body>
<?php include_once "navbar.php"; ?>
<div class="main-section post-section post-donate">
    <div class="col-md-9 post-area">
        <h2>Ajude o Contador de palavras</h2>

        <p class="flow-text">O contador de palavras nasceu com objetivo de oferecer ferramentas de texto grátis e queremos oferecer ferramentas de texto
        cada vez mais complexas totalmente de graça. Você pode ajudar a gente com qualquer quantia. </p>



        <!-- formulário de doação -->
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="paypal-form">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="RU8CNK75PWKDL">
            <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
        </form>



    </div>
    <div class="col-md-3 sidebar">
    </div>
</div>
</body>
</html>