<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "você tentou sacar $valorSaque mas tem apenas $saldoAtual na sua conta";
        parent::__construct($mensagem);
    }
}
