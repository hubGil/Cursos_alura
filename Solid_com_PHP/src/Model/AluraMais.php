<?php


namespace Alura\Solid\Model;


class AluraMais extends Video implements Pontuavel, Assistivel
{
    private string $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperaUrl():string
    {
        return 'http://vdeos.alura.com.br/' . str_replace(' ', '-', strtolower($this->categoria) ) . '/' .str_replace(' ','-',strtolower($this->nome));
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}