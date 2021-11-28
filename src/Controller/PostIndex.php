<?php

namespace silverorange\DevTest\Controller;

use silverorange\DevTest\Context;
use silverorange\DevTest\Model;
use silverorange\DevTest\Template;

class PostIndex extends Controller
{
    private $posts = [];

    public function getContext(): Context
    {
        $context = new Context();
        $context->title = 'Posts';
        $context->setPosts($this->posts);
        return $context;
    }

    public function getTemplate(): Template\Template
    {
        return new Template\PostIndex();
    }

    protected function loadData(): void
    {
        // TODO: Load posts from database here.
        $post = new Model\Post($this->db);
        $this->posts = $post->getAllPost();
    }
}
