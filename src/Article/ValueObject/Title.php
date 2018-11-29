<?php

declare(strict_types=1);

namespace LaravelDay\Article\ValueObject;


final class Title
{
    /** @var string */
    private $title;

    public function __construct(string $title)
    {
        if (strlen($title) < 10) throw new \Exception("Errore too short");//new TitleTooShort('too short');

        $this->title = $title;
    }

    public function isEqual(Title $title){
        return ((string) $title === $this->__toString());
    }

    public function __toString(){
        return $this->title;
    }
}
