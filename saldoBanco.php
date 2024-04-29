<?php

$titular = "Pedro";
$saldo = 1000;

echo "***********************\n";
echo "Titular: $titular\n";
echo "Saldo: $saldo\n";
echo "***********************\n";

do {

    echo "1. Consultar saldo\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "***********************\n";
            echo "Titular: $titular\n";
            echo "Saldo: $saldo\n";
            echo "***********************\n";
            break;

        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (int) fgets(STDIN);
            if ($valorASacar > $saldo) {
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $valorASacar;
            }
            break;

        case 3:
            echo "Qual valor deseja depositar?\n";
            $valorADepositar = (int) fgets(STDIN);
            if ($valorADepositar > 0) {
                $saldo += $valorADepositar;
            }
            break;

        case 4:
            echo "Adeus\n";
            break;

        default:
            echo "Valor inválido. tente novamente\n";
            break;
    }
} while ($opcao != 4);
