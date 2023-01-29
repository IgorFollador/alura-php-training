<?php

$telefones = ['asdsa(54) 99671-1882',  '(54) 99622-4480', '(54) 99945-5546  '];
$regex = '/^\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4})$/';

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $correspondencia
    );

//    var_dump($correspondencia);

    if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;

}
