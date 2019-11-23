<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <pre>
        <?php
        require_once 'controleIClass.php';

        $b1 = new ControleRemoto;
        $b1->ligar();
        $b1->ligar();
        $b1->play();
        $b1->pause();
        $b1->maisVolume();
        $b1->menosVolume();
        $b1->menosVolume();
        $b1->menosVolume();
        $b1->menosVolume();
        $b1->menosVolume();
        $b1->maisVolume();
        $b1->ligarMudo();
        $b1->desligarMudo();
        
        print_r($b1);
        ?>
    </pre>
</body>

</html>