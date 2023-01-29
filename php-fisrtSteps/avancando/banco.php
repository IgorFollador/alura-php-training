<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Igor',
        'saldo' => 1000
    ],
    '123.423.389-20' => [
        'titular' => 'Roberto',
        'saldo' => 1200
    ],
    '144.454.484-40' => [
        'titular' => 'Marcela',
        'saldo' => 2300
    ]
];

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 600);
$contasCorrentes['123.423.389-20'] = depositar($contasCorrentes['123.423.389-20'], 900);

unset($contasCorrentes['144.454.484-40']);

//foreach ($contasCorrentes as $key => $conta) {
//    exibeMensagem("$key => {$conta['titular']} {$conta['saldo']}");
//}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dt>
            Saldo: R$ <?= $conta['saldo']; ?>
        </dt>
        <?php } ?>
    </dl>
</body>
</html>
