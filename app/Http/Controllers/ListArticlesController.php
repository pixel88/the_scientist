<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use LaravelDay\Article\UseCase\ListArticle\ListArticles;

class ListArticlesController extends Controller
{
    public function __invoke()
    {
        // return Article::find(); /// non va bene perchè per il test dovremmo avere un db con dei dati, ma noi abbiamo solo use case

        $listArticles = new ListArticles();

        $articles = $listArticles();

        return response()->json($articles);

        // return response()->json([
        //     [
        //         'body' => 'Some Text',
        //         'creationDate' => '2018-11-29 00:00:00',
        //         'title' => 'Articolo'
        //     ]
        // ]);
    }
}
