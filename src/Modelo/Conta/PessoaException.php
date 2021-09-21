<?php

namespace Alura\Banco\Modelo\Conta;

class PessoaException extends \DomainException
{
    public function __construct($name)
    {
        $mensagem = "você tentou criar um nome com [$name] mas precisa ter mais de 5 caracteres!";
        parent::__construct($mensagem);
    }
}
