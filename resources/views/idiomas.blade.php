<html>
    <head>
        <title>I18N Laravel</title>
    </head>
    <body>
        <h2>Trabalhando com ídiomas no Laravel</h2>
        <ul>
            <li>
                <a href="<?php echo url("idiomas/br"); ?>">Brasil</a>
            </li>
            <li>
                <a href="<?php echo url("idiomas/en"); ?>">Inglês</a>
            </li>
            <li>
                <a href="<?php echo url("idiomas/es"); ?>">Espanhol</a>
            </li>
        </ul>
        <?php 
            if(isset($mensagem))
                echo $mensagem; 
        ?>
    </body>
</html>