<?php

abstract class Funcionario{
    
    private string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this -> nome = $nome;
        $this -> cpf = $cpf;
    }

    abstract public function dizerOi(): void;

}