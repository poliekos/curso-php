
<?
    #operacoes simples
    echo(1+1)*3;
    $adicao = 2+2;
    $subtracao = 6-5;
    $multiplicacao = 9*9;
    $divisao = 9/3;
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>operacoes matematicas</title>
        <meta charset = "utf-8"/>
    </head>
    <body>
        <p>2+2 = <?=$adicao?></p>
        <p>6-5 = <?=$subtracao?></p>
        <p>9*9 = <?=$multiplicacao?></p>
        <p>9/3 = <?=$divisao?></p>
        <hr/>
        <p><?=($adicao*$divisao);?></p>
    </body>
</html>