<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercicios PHP / Criando Classes e Objetos</title>
</head>
<body>
    <?php
        require_once 'Celular.php';
        $c1 =  new Celular;
        $c1 -> cor = "Azul";
        $c1 -> modelo = "Xiaomi";
        $c1 -> ligar ();
        $c1 -> torre = true; //alterando para false exec func naoligar.

       //print_r($c1);
        $c1 -> torre ();    
    ?>
</body>
</html>