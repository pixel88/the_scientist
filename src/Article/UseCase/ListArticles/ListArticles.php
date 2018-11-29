<?php

declare(strict_types=1);

namespace LaravelDay\Article\UseCase\ListArticle;

class ListArticles
{
    // public function __construct()
    // {
    // }

    public function __invoke(): array
    {
        return [
            [
                'body' => 'Some Text',
                'creationDate' => '2018-11-29 00:00:00',
                'title' => 'Articolo',
            ],
        ];
    }
}
