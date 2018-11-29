<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article\UseCase\ListArticles;

use LaravelDay\Article\UseCase\ListArticle\ListArticles;
use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldListArticles()
    {
        $handler = new ListArticles();

        // $response->assertStatus(200);
        $expectedData = [
            [
                'body' => 'Some Text',
                'creationDate' => '2018-11-29 00:00:00',
                'title' => 'Articolo',
            ],
        ];

        $data = $handler();
        $this->assertEquals($expectedData, $data);
    }
}
