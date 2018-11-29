<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article;

use LaravelDay\Article\Article;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     *
     * @test
     */
    public function shouldCreateAnArticle()
    {
        // $this->assertTrue(true);

        $id = 1;
        $title = 'Titolo';
        $body = 'body';
        $date = new \DateTimeImmutable();

        $article = new Article($id, $title, $body, $date);

        $this->assertSame($id, $article->getId());
        $this->assertSame($title, $article->getTitle());
        $this->assertSame($body, $article->getBody());
        $this->assertSame($date, $article->getCreationDate());
    }
}
