<?php

class Faxineiro extends Funcionario implements Autenticavel{

    use DizerTchau;

    private string $cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this -> cargo = $cargo;
    }

    public function dizerOi(): void
    {
        echo 'Oi!';
    }

    public function podeAutenticar(string $senha): bool
    {
        return true;
    }

}