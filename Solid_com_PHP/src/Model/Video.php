<?php


namespace Alura\Solid\Model;


use DateInterval;

class Video
{
    /**@var bool**/
    protected bool $assistido = false;
    /**@var string**/
    protected string $nome;
    /**@var DateInterval**/
    protected DateInterval $duracao;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = DateInterval::createFromDateString('0');
    }

    public function assistir():void
    {
      $this->assistido = true;
    }

    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
    }

    public function recuperaUrl(): string
    {
        return 'http://vdeos.alura.com.br/' . http_build_query(['nome' => $this->nome]);
    }
}