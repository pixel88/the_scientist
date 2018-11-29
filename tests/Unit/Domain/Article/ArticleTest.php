<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article;

use LaravelDay\Article\Article;
use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateAnArticle()
    {
        $id = 1;
        $title = new Title('Questo è un titolo');
        $body = 'Questo è un testo';
        $creationDate = new \DateTimeImmutable();

        $article = new Article($id, $title, $body, $creationDate);

        $this->assertSame($id, $article->getId());
        $this->assertTrue($title->isEqual($article->getTitle()));
        $this->assertSame($body, $article->getBody());
        $this->assertSame($creationDate, $article->getCreationDate());
    }
}
