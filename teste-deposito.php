<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\PessoaException;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

try {
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('105.254.459-27'),
            'Leandro da Silva',
            new Endereco('Mafra', 'Vila Nova', 'Pioneiro Joao Matheus Leick', '926')
        )
    );
} catch (\InvalidArgumentException | PessoaException $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    $contaCorrente->deposita(-100);
} catch (\Exception $e) {
    echo "valor negativo" . PHP_EOL;
}
