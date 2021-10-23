<?php

namespace spec\Blog\Domain;

use Blog\Domain\Article;
use PhpSpec\ObjectBehavior;

class ArticleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Article::class);
    }
}
