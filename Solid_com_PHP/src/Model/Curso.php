<?php

namespace Alura\Solid\Model;



use DomainException;

class Curso implements Pontuavel, Assistivel
{
    private string $nome;
    private array $videos;
    private array $feedbacks;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receberFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function adicionarVideo(Video $video)
    {
        if($video->minutosDeDuracao() < 3){
            throw new DomainException('Video muito curto');
        }
        $this->videos[] = $video;
    }
    /**  @return Video[] **/
    public function recuperarVideo():array
    {
        return $this->videos;
    }

    public function recuperarPontuacao(): int
    {
        return 100;
    }

    public function assistir(): void
    {
        foreach ($this->videos as $video){
            $video->assistir();
        }
    }
}